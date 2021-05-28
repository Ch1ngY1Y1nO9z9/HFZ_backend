<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
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
    protected $fillable = ['id_address'];

    protected $table = 'check';
}
