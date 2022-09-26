<!-- Menu de la cabecera -->

<header >
        
    
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container-fluid py-0 px-0">
          <a class="navbar-brand px-5" href="#"><img src="{{asset("img/design/logo.png")}}" alt="" width="130px"></a>
          <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item mt-3 me-4" style="font-weight: bold;">
                <a class="nav-link active" aria-current="page" href="{{ route('front.index') }}">Home</a>
              </li>
                <li class="nav-item mt-3 me-4 dropdown"  onclick="btnServiciosMenu()" style="font-weight: bold;"><a class="nav-link active" aria-current="page">Servicios</a>
                    <ul id="Cont-ul-Head" class="Cont-ul-Head">
                        <div class="Cont-Tit-Ul-Menu" style="margin-top: 5px !important; margin-bottom: 3px !important;">
                            <h2 class="">Servicios</h2>
                        </div>
                        <div class="Line-Menu-Ul"></div>
                        @foreach($productos_menu as $item)
                        <li class="Cont-ul-Head-Li" style="padding-top: 2px !important;"><p class=""><a href="{{route("front.servicios",$item->id)}}">{{$item->nombre}}</a></p></li>
                        @endforeach
                    </ul>
                </li>
              <li class="nav-item mt-3 me-4" style="font-weight: bold;">
                <a class="nav-link active" aria-current="page" href="{{ route('front.soluciones') }}">Soluciones</a>
              </li>
              <li class="nav-item mt-3 me-4" style="font-weight: bold;">
                <a class="nav-link active" aria-current="page" href="{{ route('front.vacantes') }}">Vacantes</a>
              </li>
              <li class="nav-item mt-3 me-4" style="font-weight: bold;">
                <a class="nav-link active" aria-current="page" href="{{ route('front.aboutus') }}">Nosotros</a>
              </li>
              <li class="nav-item mt-3 me-4" style="font-weight: bold;">
                <a class="nav-link active" aria-current="page" href="{{ route('front.contacto') }}">Contacto</a>
              </li>
            </ul>
            <form class="form-redes d-flex pe-5">
                <label class="form-control mt-3 me-2" for="" style="background: none; border: none; font-weight: bold; letter-spacing: 2px;">Tel:{!!$config->telefono!!}</label>
                <a href="{!!$config->whatsapp!!}"><img class="mt-3" src="{{asset("img/design/whats.png")}}" alt="" width="24px" height="24px" style="margin: 0px 5px;"></a>
                <a href="{!!$config->instagram!!}"><img class="mt-3" src="{{asset("img/design/insta.png")}}" alt="" width="24px"  height="24px" style="margin: 0px 5px;"></a>
                <a href="{!!$config->facebook!!}"><img class="mt-3" src="{{asset("img/design/fb.png")}}" alt="" width="24px"  height="24px" style="margin: 0px 0px;"></a>
              {{-- <button class="btn btn-outline-success" type="submit">Search</button>
              <button class="btn btn-outline-success" type="submit">Search</button>
              <button class="btn btn-outline-success" type="submit">Search</button> --}}
            </form>
          </div>
        </div>
      </nav>
</header>
    <!-- Menu de la cabecera -->



    {{-- 
            <div class="col-2 logo"><img src="{{asset("img/design/logo.png")}}" alt="" width="150px"></div>
            
            <div class="col-5 ">
                        
                        
                            <ul id="Ul-Cont-Father" class="Ul-Cont-Father">
                                <li class="Li-Cont-Menu" class="active"><div class="Cont-father-Menu"><a class="Cont-Li-F-A" href="{{ route('front.index') }}">Inicio</a></div></li>
                                <li class="Li-Cont-Menu"><button onclick="btnServiciosMenu()" class="btn-li-services"><div class="Cont-father-Menu"><p class="Cont-Li-F-A">Servicios</p></div></button>  
                                    <ul id="Cont-ul-Head" class="Cont-ul-Head">
                                        <div class="Cont-Tit-Ul-Menu">
                                            <h2>Servicios</h2>
                                        </div>
                                        <div class="Line-Menu-Ul"></div>
                                        @foreach($productos_menu as $item)
                                        <li class="Cont-ul-Head-Li"><p><a href="{{route("front.servicios",$item->id)}}">{{$item->nombre}}</a></p></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="Li-Cont-Menu"><div class="Cont-father-Menu"><a class="Cont-Li-F-A" href="{{ route('front.soluciones') }}">Soluciones</a></div></li>
                                <li class="Li-Cont-Menu"><div class="Cont-father-Menu"><a class="Cont-Li-F-A" href="{{ route('front.vacantes') }}">Vacantes</a></div></li>
                                <li class="Li-Cont-Menu"><div class="Cont-father-Menu"><a class="Cont-Li-F-A" href="{{ route('front.aboutus') }}">Nosotros</a></div></li>
                                <li class="Li-Cont-Menu"><div class="Cont-father-Menu"><a class="Cont-Li-F-A" href="{{ route('front.contacto') }}">Contacto</a></div></li>
                            </ul>
                            
            </div>

                        

            <div class="col-5">
                            <p>Tel.3338096501</p>
                            <div class="divRedes">
                                <img src="{{asset("img/design/whats.png")}}" alt="" width="24px">
                                <img src="{{asset("img/design/insta.png")}}" alt="" width="24px">
                                <img src="{{asset("img/design/fb.png")}}" alt="" width="24px">
                            </div>
                        <button onclick="menu()" id="btn-Menu-Icon-id" class="btn-Menu-Icon"><img class="iconmenu" src="{{asset("img/design/iconmenu2.png")}}" alt=""></button>
            </div> 


        </div> --}}
