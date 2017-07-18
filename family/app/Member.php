<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "member";

    protected $fillable = ['name','last_name','age', 'birth_date','avatar', 'school', 'cel_phone', 'phone', 'family_id'];


    public function family()
    {
    	return $this->belongsTo('App\Family');
    }
}
