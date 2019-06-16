<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\Request;

class DaysController extends Controller
{
  protected $guarded = [];

  public function store(Request $request)
  {
    $data = $request->validate([

    ]);

    Month::create($data);

    return redirect('');
  }
}
