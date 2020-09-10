@extends('layouts.local')

      @livewire('banner.banner')

@section('content')

  <!-- Mega menu -->

  <!-- Main Container -->
  <div class="container">

    <div class="row pt-4">

      <!-- Content -->
      <div class="col-lg-12">

        <!-- Products Grid -->
        <section class="section pt-4">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-lg-12 col-md-12 mb-4">

              <!-- Section: Categories -->
              <section class="section">


                <ul class="list-group z-depth-1">

                  <li class="list-group-item d-flex justify-content-between align-items-center">

                    <a class="dark-grey-text font-small"><i class="fas fa-apple-alt dark-grey-text mr-2"
                        aria-hidden="true"></i>

                      Frutas</a>
@foreach($frutas as $frutas)
                    <a href=""></a><span class="badge badge-danger badge-pill">{{ $frutas->cantidad }}</span></a>
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
              <!-- Section: Categories -->

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

                  <section>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-12">
 <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
              <!-- Grid row -->
  @livewire('product.productos')
                  <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                
          <!-- Grid row -->

        </section>
<div class="row">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
            class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(118).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(132).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(132).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
            class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(133).jpg"
            class="img-fluid" />
        </a>
      </figure>

    </div>

  </div>
</div>
          <!-- Section advertising 1 -->
        
          <!-- Section advertising 1 -->

          <!-- Section products -->
          
          <!-- Section product list -->
          <section class="mb-5">

            <div class="row">

              <!-- New Products -->
              <div class="col-lg-4 col-md-12 col-12 pt-4">

                <hr>

                <h5 class="text-center font-weight-bold dark-grey-text"><strong>New Products</strong></h5>

                <hr>

                <!-- First row -->
                <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a class="pt-5"><strong>iPad</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star grey-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$849</strong></h6>

                  </div>

                </div>
                <!-- First row -->

                <!-- Second row -->
                <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a><strong>Headphones</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$49</strong> <span
                        class="grey-text"><small><s>$89</s></small></span></h6>

                  </div>

                </div>
                <!-- Second row -->

                <!-- Third row -->
                <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a><strong>iMac 27"</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$1449</strong> <span
                        class="grey-text"><small><s>$2189</s></small></span></h6>

                  </div>

                </div>
                <!-- Third row -->

              </div>
              <!-- New Products -->

              <!-- Top Sellers -->
              <div class="col-lg-4 col-md-12 pt-4">

                <hr>

                <h5 class="text-center font-weight-bold dark-grey-text"><strong>Top Sellers</strong></h5>

                <hr>


                <!-- First row -->
                <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a><strong>Dell V-964i</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$649</strong> <span
                        class="grey-text"><small><s>$889</s></small></span></h6>

                  </div>

                </div>
                <!-- First row -->

                <!-- Second row -->
                <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a><strong>Asus GT67i</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star grey-text"></i></li>

                      <li><i class="fas fa-star grey-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$1249</strong> <span
                        class="grey-text"><small><s>$1489</s></small></span></h6>

                  </div>

                </div>
                <!-- Second row -->

                <!-- Third row -->
                <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a><strong>Headphones</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star grey-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$49</strong> <span
                        class="grey-text"><small><s>$89</s></small></span></h6>

                  </div>

                </div>
                <!-- Third row -->

              </div>
              <!-- Top Sellers -->

              <!-- Random Products -->
              <div class="col-lg-4 col-md-12 pt-4">

                <hr>

                <h5 class="text-center font-weight-bold dark-grey-text"><strong>Random products</strong></h5>

                <hr>

                <!-- First row -->
                <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a><strong>Dell 786i</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star grey-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$749</strong> <span
                        class="grey-text"><small><s>$889</s></small></span></h6>

                  </div>

                </div>
                <!-- First row -->

                <!-- Second row -->
                <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a><strong>Samsung V54</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$249</strong> <span
                        class="grey-text"><small><s>$489</s></small></span></h6>

                  </div>

                </div>
                <!-- Second row -->

                <!-- Third row -->
                <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                  <div class="col-6">

                    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg"
                        class="img-fluid"></a>

                  </div>

                  <div class="col-6">

                    <!-- Title -->
                    <a><strong>Canon 675-D</strong></a>

                    <!-- Rating -->
                    <ul class="rating inline-ul">

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star blue-text"></i></li>

                      <li><i class="fas fa-star grey-text"></i></li>

                      <li><i class="fas fa-star grey-text"></i></li>

                    </ul>

                    <!-- Price -->
                    <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$2149</strong> <span
                        class="grey-text"><small><s>$2489</s></small></span></h6>

                  </div>

                </div>
                <!-- Third row -->

              </div>
              <!-- Random Products -->

            </div>

          </section>
          <!-- Section product list -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-12">

              <!-- Image -->
              <div class="view z-depth-1">

                <img src="https://mdbootstrap.com/img/Photos/Others/ecommerce5.jpg" class="img-fluid"
                  alt="sample image">

                <div class="mask rgba-stylish-slight">

                  <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">

                    <div>

                      <a>

                        <span class="badge badge-primary">SALE</span>

                      </a>

                      <h2 class="card-title font-weight-bold pt-md-3 pt-1">

                        <strong>Sale from 20% to 50% on every tablet!

                        </strong>

                      </h2>

                      <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">Lorem ipsum dolor sit amet, consectetur

                        adipisicing elit. </p>

                      <a class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">Read more</a>

                    </div>

                  </div>

                </div>

              </div>
              <!-- Image -->

            </div>
            <!-- Grid column -->

          </div>

          <!-- Grid row -->
          <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>LAST ITEMS</strong></h4>

          <hr class="mb-5">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Headphones</a></strong></h5>
                  <span class="badge badge-danger mb-2">bestseller</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left"><strong>1439$</strong></span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                            class="fas fa-shopping-cart ml-3"></i></a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/16.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Headphones</a></strong></h5>
                  <span class="badge badge-danger mb-2">bestseller</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left"><strong>1439$</strong></span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                            class="fas fa-shopping-cart ml-3"></i></a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPhone</a></strong></h5><span
                    class="badge badge-info mb-2">new</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left"><strong>1439$</strong></span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                            class="fas fa-shopping-cart ml-3"></i></a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iMac</a></strong></h5><span
                    class="badge badge-danger mb-2">bestseller</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left"><strong>1439$</strong></span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                            class="fas fa-shopping-cart ml-3"></i></a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row justify-content-center mb-4">

            <!-- Pagination -->
            <nav class="mb-4">

              <ul class="pagination pagination-circle pg-blue mb-0">

                <!-- First -->
                <li class="page-item disabled clearfix d-none d-md-block"><a
                    class="page-link waves-effect waves-effect">First</a></li>

                <!-- Arrow left -->
                <li class="page-item disabled">

                  <a class="page-link waves-effect waves-effect" aria-label="Previous">

                    <span aria-hidden="true">«</span>

                    <span class="sr-only">Previous</span>

                  </a>

                </li>

                <!-- Numbers -->
                <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>

                <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>

                <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>

                <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>

                <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                <!-- Arrow right -->
                <li class="page-item">

                  <a class="page-link waves-effect waves-effect" aria-label="Next">

                    <span aria-hidden="true">»</span>

                    <span class="sr-only">Next</span>

                  </a>

                </li>

                <!-- First -->
                <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a>
                </li>

              </ul>

            </nav>
            <!-- Pagination -->

          </div>
          <!-- Grid row -->

        </section>
        <!-- Products Grid -->

      </div>
      <!-- Content -->

    </div>

  </div>

  <!-- Main Container -->
  <!-- Footer -->
  <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

    <div style="background-color: #c4970e;">

      <div class="container">

        <!-- Grid row -->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 text-center text-md-left ">

           @livewire('comentarios.comentarios')

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6  text-center ">
<img class="img-fluid rounded-circle" width="350" height="350" src="{{ asset('img/logos/logo-white.jpeg') }}" alt="">
<br><br>
            <!-- Facebook -->
            <a class="fb-ic ml-0 px-2"><i class="fab fa-facebook-f white-text"> </i></a>

            <!-- Twitter -->
            <a class="tw-ic px-2"><i class="fab fa-twitter white-text"> </i></a>

            <!-- Google + -->
            <a class="gplus-ic px-2"><i class="fab fa-google-plus-g white-text"> </i></a>

            <!-- Linkedin -->
            <a class="li-ic px-2"><i class="fab fa-linkedin-in white-text"> </i></a>

            <!-- Instagram -->
            <a class="ins-ic px-2"><i class="fab fa-instagram white-text"> </i></a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>

    </div>

    <!-- Footer Links -->
    <div class="container mt-5 mb-4 text-center text-md-left">

      <div class="row mt-3">

        <!-- First column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <h6 class="text-uppercase font-weight-bold"><strong>Company name</strong></h6>

          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,

            consectetur

            adipisicing elit.</p>

        </div>
        <!-- First column -->

        <!-- Second column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>

          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

          <p><a href="#!">MDBootstrap</a></p>

          <p><a href="#!">MDWordPress</a></p>

          <p><a href="#!">BrandFlow</a></p>

          <p><a href="#!">Bootstrap Angular</a></p>

        </div>
        <!-- Second column -->

        <!-- Third column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>

          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

          <p><a href="#!">Your Account</a></p>

          <p><a href="#!">Become an Affiliate</a></p>

          <p><a href="#!">Shipping Rates</a></p>

          <p><a href="#!">Help</a></p>

        </div>
        <!-- Third column -->

        <!-- Fourth column -->
        <div class="col-md-4 col-lg-3 col-xl-3">

          <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>

          <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>

          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>

          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>

          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Fourth column -->

      </div>

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">

      <div class="container-fluid">

        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>

      </div>

    </div>
    <!-- Copyright -->

  </footer>
@endsection