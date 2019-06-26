<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\Request;

class DaysController extends Controller
{
  protected $guarded = [];

  public function show($trainingplan_id, $month, $date)
  {
    $day = Day::where('trainingplan_id', $trainingplan_id)->where('date', $date)->get()[0];
    return view('trainingplan.dayview', compact(
      'trainingplan_id',
      'month',
      'date',
      'day'
    ));
  }

  public function store($request)
  {
    $data = [
      'runs' => $request->runs,
      'mileage' => $request->mileage,
      'date' => $request->date,
    ];

    Day::save($data);

    return redirect('trainingplan.dayview');
  }
}
