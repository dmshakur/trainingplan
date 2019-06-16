<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class MealsController extends Controller
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
