<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bannerr;
use App\Product;
use DB;

class indexController extends Controller
{
    public function Index(){
        //QUE ASCO DE IDENTACION COMO PUEDES PROGRAMAR ASI ? MARICO YO LO ARREGLO CUANDO TERMINO JAJAJ
        $frutas = DB::table('product')
            ->select(DB::raw('count(id_categoria) as cantidad') )
            ->where('id_categoria', '=', 'Frutas')
            ->get();

        $flores = DB::table('product')
            ->select(DB::raw('count(id_categoria) as cantidad') )
            ->where('id_categoria', '=', 'Flores')
            ->get();

        $floresyfrutas = DB::table('product')
            ->select(DB::raw('count(id_categoria) as resultado1') )
            ->where('id_categoria', '=', 'Flores y Frutas')
            ->get();

        $golosinas = DB::table('product')
            ->select(DB::raw('count(id_categoria) as resultado2') )
            ->where('id_categoria', '=', 'Golosinas y Licores')
            ->get();

        $banners = DB::table('banner')
            ->select(DB::raw('*'))
            ->where('status', '=', 'A')
            ->get();

        //dd($banners);
    	
        return view('index.index',[
        	'frutas' => $frutas,
            'flores' => $flores,
            'floresyfrutas' => $floresyfrutas,
            'golosinas' => $golosinas,
            'banners' => $banners,
        ]);
    }

    
}
