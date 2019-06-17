<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\Request;

class DaysController extends Controller
{
  protected $guarded = [];

  public function store($request)
  {
    $date = Carbon::parse($request->startdate);

    $data = [
      'trainingplan_id' => $request->id,
      'runs' => 0,
      'mileage' => 0,
      'date' => $date,
    ];

    for ($i = 0; $i < ($request->weeks * 7) + 1; $i++) {
      $data->date = Carbon::parse($date)->day += 1;
      Day::create($data);
    }


    return redirect('overview');
  }
}
