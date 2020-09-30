<?php

declare(strict_types=1);
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Adresse;

/***
 * Class User
 * @package App
 * @author scotttresor scotttresor@gmail.com
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /***
     * @return BelongsToMany
     */
    public  function  roles(): BelongsToMany
    {
        return $this->belongsToMany('App\Role');
    }

    /***
     * @return Model|BelongsToMany
     */
    public function  isAdmin(): BelongsToMany
    {
        return $this->roles()->where('name', 'admin')->first();
    }


    public function  adresses()
    {
        return $this->hasMany(Adresse::class);
    }
}
