
<div wire:ignore.self class="modal fade" id="updateModalbanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
	<form wire:submit.prevent="update()" enctype="multipart/form-data">
	<input type="hidden" wire:model="id_banner">
					<div class="form-group row">
									
							<label class="col-sm-12 col-md-2 col-form-label">Titulo</label>
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
                
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
    </div>
</div>
</div>

