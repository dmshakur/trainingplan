<?php

namespace App\Http\Controllers;

use App\Run;
use Illuminate\Http\Request;

class RunsController extends Controller
{
  protected $guarded = [];

  public function store(Request $request)
  {
    $data = $request->validate([
      'day_id' => 'required',
      'duration_hours' => 'required',
      'duration_seconds' => 'required',
      'miles' => 'required',
      'average_pace_minutes' => 'required',
      'average_pace_seconds' => 'required',
      'prerun_nutrition' => 'required',
      'run_nutrition' => 'required',
      'postrun_nutrition' => 'required',
      'start_time' => 'required',
      'details' => 'required',
    ]);
    dd($data);
    Run::create($data);

    return redirect(Request::url());
  }
}
