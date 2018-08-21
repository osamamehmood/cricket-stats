<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeBatting($builder)
    {
        return $builder->where('type', 'batting');
    }

    public function scopeBowling($builder)
    {
        return $builder->where('type', 'bowling');
    }

    public function getBattingStrikeRateAttribute() {
        $strikeRate = ($this->number_of_runs / $this->number_of_bowls_faced) * 100;

        return number_format($strikeRate, 2);
    }
}
