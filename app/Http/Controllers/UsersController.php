<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
      $trainingPlans = TrainingPlan::where('user_id')->$user.id;

      return view('overview', compact('trainingPlans'));
    }

    public function store()
    {
      $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
      ]);

      $password = Hash::make($data->password);

      $data->password = $password;

      User::create($data);

      return redirect('overview');
    }

    public function verify()
    {
      $email = request()->(['email'])
      if ()
      $password = request()->(['password'])
    }
}
