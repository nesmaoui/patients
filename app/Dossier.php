<?php

namespace App;


use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function Adossier(){
        return $this->hasMany('App\Adossier');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    


}
