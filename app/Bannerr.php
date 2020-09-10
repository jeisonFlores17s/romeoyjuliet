<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bannerr extends Model
{
         protected $table = "banner";

    public $timestamps = true;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'imagen',

    ];
}
