<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    public function users() {
        return $this->belongsTo('App\User');
    }

    public static function winPercentage($wins, $games) {
        return $wins / $games * 100;
    }
}
