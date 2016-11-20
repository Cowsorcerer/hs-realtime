<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function heroes() {
        return $this->hasMany('App\Hero');
    }

    public static function get($title) {
        return Division::where('title', $title)->first();
    }
}
