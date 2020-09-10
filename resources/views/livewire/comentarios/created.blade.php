<div>
	<form wire:submit.prevent="store()">
  						@csrf
  						<div class="md-form ">
  							<input type="text" id="materialRegisterFormEmail" class="form-control" wire:model="nombre" style="color:#fff">
  							@error('nombre') <span class="badge badge-danger">{{ $message }}</span> @enderror
  							<label for="materialLoginFormEmail" style="color:#fff">Nombre</label>
  						</div>
  						<div class="md-form ">
  							<input type="email" id="materialRegisterFormEmail" class="form-control" wire:model="correo" style="color:#fff">
  							@error('correo') <span class="badge badge-danger">{{ $message }}</span> @enderror
  							<label for="materialLoginFormEmail" style="color:#fff">Correo</label>
  							
  						</div>
  						<div class="md-form ">
  							<textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3" wire:model="descripcion" style="color:#fff"></textarea>
  							@error('descripcion') <span class="badge badge-danger">{{ $message }}</span> @enderror
  							<label for="materialLoginFormEmail" style="color:#fff">Mensaje</label>
                <br>
  							<button wire:click.prevent="store()" class="btn btn-primary">Enviar Comentario</button>   
  						</div>
  					</form>
              @if (session()->has('message'))

  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong> {{ session('message') }}</strong>
  </div>
  @endif
</div>