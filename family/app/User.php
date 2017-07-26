<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class User extends Authenticatable  implements StaplerableInterface 
{
    use EloquentTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'sex', 'type', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('avatar', [
            'styles' => [
                'medium' => '300x300',
                'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }


    public function family() //es en singular por que me retorna solo 1 familia
    {
        return $this->hasOne('App\Family'); //es la relacion inversa con modelo family
    }
}
