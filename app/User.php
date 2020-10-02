<?php

declare(strict_types=1);
namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /**
     * @return BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /***
     * @return BelongsToMany
     */
    public function  isAdmin()
    {
        return $this->roles()->where('name', 'ROLE_ADMIN')->first();
    }

    /***
     * @return BelongsToMany
     */
    public function  isUser()
    {
        return $this->roles()->where('name', 'ROLE_USER')->first();
    }

    /***
     * @return HasMany
     */
    public function adresss()
    {
        return $this->hasMany(Adresse::class);
    }

    /**
     * @return BelongsTo
     */
    public function impots(): BelongsTo
    {
        return $this->belongsTo(Impot::class);
    }
}
