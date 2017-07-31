<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Family extends Model implements StaplerableInterface
{
    protected $table = "family";
    use EloquentTrait;

    protected $fillable = ['name', 'avatar', 'user_id'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('avatar', [
            'styles' => [
                'medium' => '300x300',
                'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

    public function user()
    { //funcion con nombre del modelo
    	return $this->belongsTo('App\User'); //retorno el modelo
    }

    public function member()
    {
    	return $this->hasMany('App\Member');
    }
}
