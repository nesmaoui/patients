<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_admin','is_med','name', 'email', 'password','cin','adr','num','sex','birth',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function dossiers(){
        return $this->hasMany('App\Dossier');
    }

    public function fichiers(){
        return $this->hasMany('App\Fichier');
    }

    public function rdvs(){
        return $this->hasMany('App\Rdv');
    }

    public function adossiers(){
        return $this->hasMany('App\Adossier');
    }

    public function commentaires(){
        return $this->hasMany('App\Commentaire');
    }


    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
