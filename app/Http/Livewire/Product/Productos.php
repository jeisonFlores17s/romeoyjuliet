<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Livewire\WithFileUploads;
use DB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use App\Product;
use SweetAlert;

class Productos extends Component
{
	public $search;
	use WithFileUploads;
	use WithPagination;
	public $nombre_producto, $descripcion_producto, $precio_producto, $imagen_producto, $id_categoria, $id_producto, $productss;
	public $updateMode = false;

	private function resetInputFields(){
		$this->nombre_producto = '';
		$this->descripcion_producto = '';
		$this->precio_producto = '';
		$this->imagen_producto = '';
	}

	public function store()
	{
		$validatedDate = $this->validate([
			'nombre_producto' => 'required',
			'descripcion_producto' => 'required',
			'imagen_producto' => 'required',
			'precio_producto' => 'required',
			'id_categoria' => 'required',

		]);
		$filename = $this->imagen_producto->store('productos');
		Product::create([
			'nombre_producto' => $this->nombre_producto,
			'descripcion_producto' => $this->descripcion_producto,
			'precio_producto' => $this->precio_producto,
			'id_categoria' => $this->id_categoria,
			'imagen_producto' => $filename
		]);

		session()->flash('message', 'has ingresado un nuevo producto: ' .$this->nombre_producto. '');
		$this->resetInputFields();
		$this->emit('productUser'); // Close model to using to jquery
	}

	    public function edit($id)
    {
        $productss = Product::findOrFail($id);
        $this->id_producto = $id;
        $this->nombre_producto = $productss->nombre_producto;
        $this->descripcion_producto = $productss->descripcion_producto;
        $this->precio_producto = $productss->precio_producto;
        $this->imagen_producto = $productss->imagen_producto;
        $this->id_categoria = $productss->id_categoria;
  
        $this->updateMode = true;
    }
        public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

        public function update()
    {
		$validatedDate = $this->validate([
			'nombre_producto' => 'required',
			'descripcion_producto' => 'required',
			'imagen_producto' => 'required',
			'precio_producto' => 'required',
			'id_categoria' => 'required',

		]);

        if ($this->id_producto) {
            $productss = Product::find($this->id_producto);
            $filename = $this->imagen_producto->store('productos');
            $productss->update([
			'nombre_producto' => $this->nombre_producto,
			'descripcion_producto' => $this->descripcion_producto,
			'precio_producto' => $this->precio_producto,
			'id_categoria' => $this->id_categoria,
			'imagen_producto' => $filename
            ]);
            $this->updateMode = false;
            session()->flash('message', 'has editado el producto: ' .$this->nombre_producto. '');
            $this->resetInputFields();

        }
    }

        public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('message', 'Producto eliminado Successfully.');
    }

	public function render()
	{
		return view('livewire.product.productos',[
        	'products' => Product::where('nombre_producto', 'like', '%'.$this->search.'%')->orderby('created_at', 'desc')->paginate(3),
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

            'galeria' => DB::table('product')
            ->select(DB::raw('*') )
            ->orderby('created_at', 'desc')
            ->get(),
        ]);
	}






}
