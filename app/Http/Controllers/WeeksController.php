<?php

namespace App\Http\Controllers;

use App\Week;
use Illuminate\Http\Request;

class WeeksController extends Controller
{
  protected $guarded = [];

  public function store(Request $request)
  {
    $data = $request->validate([

    ]);

    Week::create($data);

    return redirect('');
  }
}
