<?php

namespace App\Http\Livewire\Comentarios;

use Livewire\Component;
use App\Comentarioss;

class Comentarios extends Component
{
	public $nombre, $correo, $descripcion;
    public function render()
    {
        return view('livewire.comentarios.comentarios');
    }




  private function resetInputFields(){
        $this->nombre = '';
        $this->correo = '';
        $this->descripcion = '';

    }

            public function store()
    {
        $validatedDate = $this->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'descripcion' => 'required|max:30|min:5',
        ]);

           Comentarioss::create([

      'nombre' => $this->nombre,
      'correo' => $this->correo,
      'descripcion' => $this->descripcion,

    ]);
  
        session()->flash('message', 'tu comentario fue enviado con exito!.');
  $this->resetInputFields();
    }  

}
