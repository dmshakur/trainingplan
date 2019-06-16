<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = [];

    public function day()
    {
      return $this->belongsTo(\App\Day::class);
    }
}
