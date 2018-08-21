<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $guarded = [];

    public function statistics()
    {
        return $this->hasMany(Statistic::class);
    }

    public function round()
    {
        return $this->belongsTo(Round::class);
    }
}
