<div class="col-md-8">
				<form wire:submit.prevent="store()" enctype="multipart/form-data">
					<div class="form-group row">
								
									@csrf
							<label class="col-sm-12 col-md-2 col-form-label">Text</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Titulo" wire:model="titulo">
								@error('titulo') <span class="error">{{ $message }}</span> @enderror
							</div>
						</div>
						<div class="form-group">
							<label>Subir Imagen!</label>
							<input type="file" wire:model="imagen" class="form-control-file form-control height-auto">
							@error('imagen') <span class="error">{{ $message }}</span> @enderror
						</div>
						<button wire:click.prevent="store()" class="btn btn-primary">Guardar</button>
						</form>
					</div>
				