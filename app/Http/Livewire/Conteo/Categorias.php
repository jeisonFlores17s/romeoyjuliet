<?php

namespace App\Http\Livewire\Conteo;

use Livewire\Component;
use DB;
use App\Product;

class Categorias extends Component
{
	
    public function render()
    {
        return view('livewire.conteo.categorias',[
        	'frutas' => DB::table('product')
			->select(DB::raw('count(id_categoria) as cantidad1') )
			->where('id_categoria', '=', 'Frutas')
			->get(),
			        'flores' => DB::table('product')
            ->select(DB::raw('count(id_categoria) as cantidad') )
            ->where('id_categoria', '=', 'Flores')
            ->get(),

        'floresyfrutas' => DB::table('product')
            ->select(DB::raw('count(id_categoria) as resultado1') )
            ->where('id_categoria', '=', 'Flores y Frutas')
            ->get(),

        'golosinas' => DB::table('product')
            ->select(DB::raw('count(id_categoria) as resultado2') )
            ->where('id_categoria', '=', 'Golosinas y Licores')
            ->get(),

        'banners' => DB::table('banner')
            ->select(DB::raw('*'))
            ->where('status', '=', 'A')
            ->get(),

        ]);
    }
}
