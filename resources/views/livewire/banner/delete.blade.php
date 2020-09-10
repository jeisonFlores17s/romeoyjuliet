<div>	
	<form wire:submit.prevent="save()">
		<input type="hidden" wire:model="id_eliminar" value="{{ $banners->id }}">
		<a class="dropdown-item"  wire:click="save({{ $banners->id }})"><i class="dw dw-delete-3"></i> Delete</a>
	</form>
</div>