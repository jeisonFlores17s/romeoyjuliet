<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
                 protected $table = "product";

    public $timestamps = true;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_producto',
        'descripcion_producto',
        'imagen_producto',
        'precio_producto',
        'id_categoria',

    ];
}
