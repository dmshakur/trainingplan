<?php

namespace App\Http\Controllers;

use App\TrainingPlan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainingPlansController extends Controller
{
  protected $guarded = [];

  public function index($trainingPlan)
  {
    return view('trainingplan.trainingplan');
  }

  public function store(Request $request)
  {
    $trainingData = $request->validate([
      'user_id' => 'required',
      'month_count' => '',
      'title' => 'required',
      'description' => 'required',
      'weeks' => 'required',
      'startdate' => 'required'
    ]);

    $trainingData['month_count'] = Carbon::parse($trainingData['startdate'])->diffInMonths(Carbon::parse($trainingData['startdate'])->addWeeks($trainingData['weeks']));

    TrainingPlan::create($trainingData);

    $dayData = [
      'trainingplan_id' => \Illuminate\Support\Facades\DB::table('training_plans')->latest()->first()->id,
      'runs' => 0,
      'mileage' => 0,
      'date' => Carbon::parse($trainingData['startdate']),
    ];

    $date = Carbon::parse($trainingData['startdate']);

    for ($i = 0; $i < ($trainingData['weeks'] * 7) + 1; $i++) {
      $dayData['date'] = Carbon::parse($date)->addDays($i);
      \App\Day::create($dayData);
    }

    return redirect('overview');
  }
}
