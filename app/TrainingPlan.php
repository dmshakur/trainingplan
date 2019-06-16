<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingPlan extends Model
{
    protected $guarded = [];

    public function users()
    {
      return $this->belongsTo(User::class);
    }
}
