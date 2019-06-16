<?php

namespace App\Http\Controllers;

use App\User;
use App\trainingPlan;
use Illuminate\Http\Request;

class OverviewsController extends Controller
{
    public function trainingPlan($trainingPlanId)
    {
      $trainingPlan = TrainingPlan::find($trainingPlanId);

      return view('trainingplan.trainingplan', compact('trainingPlan'));
    }
}
