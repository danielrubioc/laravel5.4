<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = "family";

    protected $fillable = ['name', 'avatar', 'user_id'];

    public function user()
    { //funcion con nombre del modelo
    	return $this->belongsTo('App\User'); //retorno el modelo
    }

    public function member()
    {
    	return $this->hasMany('App\Member');
    }
}
