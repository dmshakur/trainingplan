<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $guarded = [];

    public function trainingplan()
    {
      return $this->belongsTo(\App\TrainingPlan::class);
    }

    public function meals()
    {
      return $this->hasMany(\App\Meal::class);
    }

    public function runs()
    {
      return $this->hasMany(\App\Run::class);
    }
}
