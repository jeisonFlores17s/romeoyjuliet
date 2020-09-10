<div>
                 <section class="section">


                  <ul class="list-group z-depth-1">

                    <li class="list-group-item d-flex justify-content-between align-items-center">

                      <a class="dark-grey-text font-small"><i class="fas fa-apple-alt dark-grey-text mr-2"
                          aria-hidden="true"></i>

                        Frutas</a>
  @foreach($frutas as $frutas)
                      <a href=""></a><span class="badge badge-danger badge-pill">{{ $frutas->cantidad1 }}</span></a>
  @endforeach
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">

                      <a class="dark-grey-text font-small"><i class="fas fa-flower dark-grey-text mr-3"
                          aria-hidden="true"></i>

                        Flores</a>
  @foreach($flores as $flores)
                      <span class="badge badge-danger badge-pill">{{ $flores->cantidad }}</span>
  @endforeach
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">

                      <a class="dark-grey-text font-small"><i class="fas fa-camera-retro dark-grey-text mr-3"
                          aria-hidden="true"></i>Flores y Frutas</a>
  @foreach($floresyfrutas as $floresyfrutas)
                      <span class="badge badge-danger badge-pill">{{ $floresyfrutas->resultado1 }}</span>
  @endforeach
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">

                      <a class="dark-grey-text font-small"><i class="fas fa-glass-cheers dark-grey-text mr-3"
                          aria-hidden="true"></i>

                        Golosinas y Licores</a>
  @foreach($golosinas as $golosinas)
                      <span class="badge badge-danger badge-pill">{{ $golosinas->resultado2 }}</span>
  @endforeach
                    </li>

                  </ul>

                </section>

 @auth

        @include('livewire.product.update')

        @include('livewire.product.create')
    
       @if (session()->has('message'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        @endif
@endauth

<!-- Button trigger modal -->

<!-- Modal -->



<div class="md-form mt-0">
  <input class="form-control" wire:model="search" type="text" placeholder="Buscar un arreglo" aria-label="Search">
</div>

              <div class="row">
@foreach($products as $product)
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                  <!-- Card -->
                  <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                      <img src="storage/{{ $product->imagen_producto }}"
                        class="img-fluid" alt="">

                      <a>

                        <div class="mask rgba-white-slight"></div>

                      </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                      <!-- Category & Title -->
                      <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">{{ $product->nombre_producto }}</a></strong>
                      </h5>

                      <span class="badge badge-danger mb-2">{{ $product->id_categoria }}</span>

                      <!-- Rating -->
                      <ul class="rating" style="color: #000;">

{{ $product->descripcion_producto }}

                      </ul>

                      <!-- Card footer -->
                      <div class="card-footer pb-0">

                        <div class="row mb-0">

                          <span class="float-left"><strong>{{ number_format($product->precio_producto, 1) }}$</strong></span>
<hr>
                          <span class="float-right">
                            @auth
                            <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $product->id }})" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
<button  wire:click="delete({{ $product->id }})" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
@endauth
<a href="https://api.whatsapp.com/send?phone=573156132754&text=Estoy%20interesado%20en%20el%20producto%20{{ $product->nombre_producto }}	"><i class="fab fa-whatsapp-square fa-2x"></i></a>

                          </span>

                        </div>

                      </div>

                    </div>
                    <!-- Card content -->

                  </div>
                  <!-- Card -->

                </div>

                @endforeach
 <div class="container">
        <div class="row justify-content-sm-center">
           <div class="col-sm-4">&nbsp</div>
           <div class="col-md-auto">{{ $products->links() }}</div>
           <div class="col-sm-4">&nbsp</div>        
        </div>
   </div>

              </div>
</div>
