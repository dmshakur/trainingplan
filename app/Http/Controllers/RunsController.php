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

    ]);

    Month::create($data);

    return redirect('');
  }
}
