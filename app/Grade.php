<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $guarded = [];

    public function rounds()
    {
        return $this->hasMany(Round::class);
    }
}
