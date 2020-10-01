<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Impot extends Model
{
    protected $guarded = [];

    /****
     * @return HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
