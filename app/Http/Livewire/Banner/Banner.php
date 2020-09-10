<?php

namespace App\Http\Livewire\Banner;

use Livewire\Component;
use App\Bannerr;
use Livewire\WithFileUploads;
use DB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Banner extends Component
{

use WithPagination;
	    use WithFileUploads;

public $titulo, $imagen, $banner, $id_banner, $staus, $id_eliminar;
   public $updateMode = false;


        private function resetInputFields(){
        $this->titulo = '';
        $this->imagen = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'titulo' => 'required',
            'imagen' => 'required',
        ]);
  $filename = $this->imagen->store('imagen');
                Bannerr::create([
            'titulo' => $this->titulo,
         'status' => 'A',
           'imagen' => $filename
     ]);
  
        session()->flash('message', 'Post Created Successfully.');
  
    $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $banner = Bannerr::findOrFail($id);
        $this->id_banner = $id;
        $this->titulo = $banner->titulo;
        $this->imagen = $banner->imagen;
  
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    public function update()
    {//
        $validatedDate = $this->validate([
            'titulo' => 'required',
            'imagen' => 'required|',
        ]);

        if ($this->id_banner) {
            $user = Bannerr::find($this->id_banner);
            $filename = $this->imagen->store('imagen');
            $user->update([
                'titulo' => $this->titulo,
                'imagen' => $filename,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Updated Successfully.');
            $this->resetInputFields();

        }
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function save($id)
    { 
        if ($this->id_eliminar) {
            $user = Bannerr::FindOrFail($id->id_eliminar);
            $user->update([
                'status' => $this->id_eliminar = "B",

            ]);
            //dd($user);
}
}
    public function render()
    {
    	
        return view('livewire.banner.banner',[
        	'banners' => DB::table('banner')
    ->select(DB::raw('*'))
    ->orderBy('created_at', 'desc')
    ->where('status', '=', 'A')
            ->get(),
        ]);
    }
}
