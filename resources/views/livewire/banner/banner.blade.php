<div>
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    @foreach($banners as $ban)
    <li data-target="#carousel-example-1z" data-slide-to="{{ $ban->id }}" class="{{ $ban->active }}"></li>
    @endforeach
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    @foreach($banners as $ban)
    <div class="carousel-item {{ $ban->active }}">
      <div class="view">
              <img class="d-block w-100" src="storage/{{ $ban->imagen }}" width="640" height="360"
        alt="{{ $ban->titulo }}">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">{{ $ban->titulo }}</h3>
                                    @auth
<button data-toggle="modal" data-target="#updateModalbanner" wire:click="edit({{ $ban->id }})" class="btn btn-primary btn-sm">Edit</button>
@endauth
 
      </div>
    </div>
    @endforeach
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <i class="fas fa-arrow-left fa-2x" aria-hidden="true"></i>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <i class="fas fa-arrow-right fa-2x" aria-hidden="true"></i>
    <span class="sr-only">Siguiente</span>
  </a>
  <!--/.Controls-->
</div>
 @include('livewire.banner.uploads')
</div>























