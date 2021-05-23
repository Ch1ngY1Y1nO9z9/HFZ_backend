<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
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
    protected $fillable = ['generations_id','file_list_name','name_en','name_jp','aka','spamming','twitter_link','youtube_link'];

    function gens() {
        return $this->belongsTo('App\Generations', 'generations_id');
    }

    function WLR() {
        return $this->hasOne('App\WinLoseRatio', 'wrestler_id');
    }

    function clips() {
        return $this->hasMany('App\WrestlerClips', 'wrestler_id')->orderBy('sort');
    }
}
