<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    public function addossier(){
        return $this->belongsTo('App\Adossier');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
