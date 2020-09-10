<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarioss extends Model
{
     protected $table = "comentarios";

    public $timestamps = true;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'correo',
        'descripcion',

    ];
}
