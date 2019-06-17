<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingPlan extends Model
{
    protected $guarded = [];

    public function user()
    {
      return $this->belongsTo(\App\User::class);
    }

    public function days()
    {
      return $this->hasMany(\App\Day::class);
    }
}
