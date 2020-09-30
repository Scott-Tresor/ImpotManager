<?php

declare(strict_types=1);
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/***
 * Class Adresse
 * @package App
 * @author scotttresor scotttresor@gmail.com
 */
class Adresse extends Model
{
    /***
     * @var array
     * @author scotttresor scotttresor@gmail.com
     */
    protected $guarded = [];

    /***
     * @return BelongsTo
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
