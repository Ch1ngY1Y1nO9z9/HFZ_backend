<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WinLoseRatio extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['wrestler_id','single_total','single_win','tag_total','tag_win','specailEvent_total','specailEvent_win','draw'];

    function WLR() {
        return $this->hasOne('App\Profiles', 'wrestler_id');
    }
}
