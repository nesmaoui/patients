<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    public function adossier(){
        return $this->belongsTo('App\Adossier');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
