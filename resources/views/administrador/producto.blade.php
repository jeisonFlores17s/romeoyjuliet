@extends('layouts.administrador')
@section('css')
	@livewireStyles
@endsection
@section('content')
@livewire('product.productos')

@endsection
@section('js')
	@livewireScripts
@endsection
    <script type="text/javascript">
        window.livewire.on('productUser', () => {
            $('#exampleModal').modal('hide');
        });
    </script>