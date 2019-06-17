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
    $data = $request->validate([
      'user_id' => 'required',
      'month_count' => '',
      'title' => 'required',
      'description' => 'required',
      'weeks' => 'required',
      'startdate' => 'required'
    ]);

    $data['month_count'] = Carbon::parse($data['startdate'])->diffInMonths(Carbon::parse($data['startdate'])->addWeeks(27));

    TrainingPlan::create($data);

    $dayData = [
      'trainingplan_id' => \Illuminate\Support\Facades\DB::table('training_plans')->latest()->first()->id,
      'runs' => 0,
      'mileage' => 0,
      'date' => Carbon::parse($data['startdate']),
    ];

    for ($i = 0; $i < ($data['weeks'] * 7) + 1; $i++) {
      $dayData['date'] = Carbon::parse($dayData['date'])->day += 1;
      \App\Day::create($dayData);
    }

    return redirect('overview');
  }
}
