<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adossier extends Model
{

    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function dossier(){
        return $this->belongsTo('App\Dossier');
    }

    public function rdvs(){
        return $this->hasMany('App\Rdv');
    }


    public function commentaires(){
        return $this->hasMany('App\Commentaire');
    }

    public function fichiers(){
        return $this->hasMany('App\Fichier');
    }

}
