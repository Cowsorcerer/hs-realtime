<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    public function division() {
        return $this->belongsTo('App\Division');
    }
}
