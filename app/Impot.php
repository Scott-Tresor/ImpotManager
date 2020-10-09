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
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function taxCalcuation()
    {
        return  request()->get('impotretenue') * 100/22;
    }
}
