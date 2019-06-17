<?php

namespace App\Http\Controllers;

use App\Month;
use Illuminate\Http\Request;

class MonthsController extends Controller
{
    protected $guarded = [];

    public function store(Request $request)
    {
      $data = $request->validate([
        'trainingplan_id' => 'required',
        'month' => 'required',
        'week_count' => 'required',
        'last_day' => 'required',
      ]);

      Month::create($data);
    }
}
