<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $guarded = [];

    public function trainingplan()
    {
      return $this->belongsTo(\App\TrainingPlan::class);
    }

    public function days()
    {
      return $this->hasMany(\App\Day::class);
    }
}
