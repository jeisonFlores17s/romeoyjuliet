<div>
	                  <ul class="list-group z-depth-1">

                    <li class="list-group-item d-flex justify-content-between align-items-center">

                      <a class="dark-grey-text font-small"><i class="fas fa-apple-alt dark-grey-text mr-2"
                          aria-hidden="true"></i>

                        Frutas</a>
  @foreach($frutas as $fruta)
                      <a href=""></a><span class="badge badge-danger badge-pill">{{ $fruta->cantidad1 }}</span></a>
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
</div>