<?php

namespace App\Http\Controllers;

use App\TrainingPlan;
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
      'name' => 'required',
      'description' => 'required',
      'weeks' => 'required',
      'startdate' => 'required'
    ]);

    TrainingPlan::create($data);

    return redirect('overview');
  }
}
