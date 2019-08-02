<?php

namespace App\Http\Controllers;

use App\Run;
use Illuminate\Http\Request;

class RunsController extends Controller
{
  protected $guarded = [];

  public function store(Request $request)
  {
    $runData = $request->validate([
      'day_id' => 'required',
      'duration_hours' => '',
      'duration_minutes' => '',
      'miles' => 'required',
      'average_pace_minutes' => '',
      'average_pace_seconds' => '',
      'location' => 'required',
      'prerun_nutrition' => '',
      'run_nutrition' => '',
      'postrun_nutrition' => '',
      'start_time' => 'required',
      'details' => '',
    ]);

    Run::create($runData);

    return view('overview');
  }
}
