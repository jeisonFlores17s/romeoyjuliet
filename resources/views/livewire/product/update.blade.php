<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <input type="hidden" wire:model="id_producto">
                <div class="form-group ">
                    <label class="col-form-label"><h5>titulo</h5></label>
                    <input class="form-control" type="text" placeholder="" wire:model="nombre_producto">
                    @error('nombre_producto') <span class="badge badge-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group ">
                    <label class="col-form-label" for=""><h5>Categorias</h5></label>
                    <select class="custom-select2 form-control" wire:model="id_categoria" style="width: 100%; height: 38px;">
                        <option value="Frutas">Frutas</option>
                        <option value="Flores">Flores</option>
                        <option value="Flores y Frutas">Flores y Frutas</option>
                        <option value="Golosinas y Licores">Golosinas y Licores</option>
                    </select>
                    @error('id_categoria') <span class="badge badge-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label"><h5>Descripción</h5></label>
                    <textarea class="form-control" wire:model="descripcion_producto"></textarea>
                    @error('descripcion_producto') <span class="badge badge-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group ">
                    <label class="col-form-label"><h5>precio</h5></label>
                    <input class="form-control" type="number" placeholder="" wire:model="precio_producto">
                    @error('precio_producto') <span class="badge badge-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group ">
                    <label class="col-form-label"><h5>Imagen del Producto</h5></label>
                    <input class="form-control" type="file" placeholder="" wire:model="imagen_producto">
                    @error('imagen_producto') <span class="badge badge-danger">{{ $message }}</span> @enderror
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