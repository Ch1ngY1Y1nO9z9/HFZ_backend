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

    function generations() {
        return $this->hasOne('App\Generations', 'id');
    }

    function WLR() {
        return $this->hasOne('App\WinLoseRatio', 'id');
    }
}
