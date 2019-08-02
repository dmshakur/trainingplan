<?php

namespace App\Http\Controllers;

use App\Day;
use App\Run;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DaysController extends Controller
{
  protected $guarded = [];

  public function show($trainingplan_id, $month, $date)
  {
    $day = Day::where('trainingplan_id', $trainingplan_id)->where('date', $date)->first();

    $runs = Run::where('day_id', $day->id)->get();

    return view('trainingplan.dayview', compact(
      'trainingplan_id',
      'month',
      'date',
      'day',
      'runs'
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
