<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $guarded = [];

    public function grade()
    {
        return $this->hasMany(Grade::class);
    }

    public function matches()
    {
        return $this->hasMany(Match::class);
    }
}
