@extends('layouts.front')

@section('title', 'Inicio')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">

	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}"> --}}
@endsection
@section('styleExtras')



@endsection
@section('content')

	<div>

    
	<style> 
    .seccion1Index{
    background-image: url({{ asset('img/photos/seccions/'.$elements[1]->imagen)}});
    }


	.cartasec1{
		background-image: url({{ asset('img/photos/seccions/'.$elements[5]->imagen)}});
        
	}
    .seccion3{
        background-image: url({{ asset('img/photos/seccions/'.$elements[6]->imagen)}});
        

}

    </style>

	</div>
	 	<!-- SECCION 1 start-->
		<div class="sec1-index">
			<div class="index">
				<div class="seccion1Index">
					<div class="contenetBorder">
						<div class="seccionIzqIndex">
							<img src="{{ asset('img/design/img2.png')}}" alt="">
							<div class="contseccionIzqIndex">
							<h1>Seguridad privada</h1>
							<p>{!!$elements[0]->texto!!}</p>
							<div class="barraRT"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
        <!-- SECCION 1 end -->

		<!-- SECCION 2 start-->
        <div class="seccion2Index">

            <div class="tituloSeccion2">
                <h1>SERVICIO INTEGRAL</h1>
                <div class="contLinSec21">
                    <div class="contLinSec2">
                        <div class="linSec2"></div><img src="{{asset('img/design/iconDiaman.png')}}" alt=""><div class="linSec2"></div>
                    </div>    
                </div>
                
            </div>

            <div class="textSeccion2">
                <p>{!!$elements[2]->texto!!}</p>
            </div>


            <div class="ContCardsSeccion2_1" >
                <div class="ContCardsSeccion2">


                @foreach($desta as $destacado)
                {{-- CARD --}}
                <a href="{{route("front.servicios",$destacado->id)}}">
                    <div class="cadrSec2">
                        <div class="Cont-Titulo-cards-vac-sec3 py-2" style="margin-top: 10px">
                            <h1 style="font-weight: bold">{{$destacado->nombre}}</h1>
                            <div class="LineRVacantes my-1"></div>
                        </div>
                        {{-- <div class="titCardSec2 mt-2">
                            <h2 style="font-weight: bold; font-size: 20px;">
                            {{$destacado->nombre}}
                            </h2>
                            <div class="linCard2"></div>
                        </div> --}}
                        <div class="ContTxtCadrSec2 pt-3" style="font-size: 14px;">
                            <p>
                            {!!$destacado->descripcion!!}
                            </p>
                        </div>

                        <div class="ContCicCardSec2">
                            <div class="contDiamsec2">
                                <img src="{{asset('img/design/iconDiaman.png')}}" alt="">
                            </div>
                            <div class="circles2">
                                @if (!empty($destacado->fotito))
                                <img src="{{ asset('img/photos/productos/'.$destacado->fotito)}}" alt="">
                                @else
                                <img src="{{ asset('img/design/police.png')}}" alt="">
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    </a>
                    {{-- CARD --}}
                    @endforeach

                </div>
                <div>
                    
                </div>
            </div>
            <div class="BotonesSliderSec2">
                <button class="btnAnterior">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="btnSiguiente">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            


        </div>
        <!-- SECCION 2 end-->

		<!-- SECCION 3 start-->
        <div>
                <div class="contTseccion3">
                    <div class="Tseccion3 py-2">
                        <a href="{{ route('front.vacantes') }}" class="text-white h3" style="text-decoration: none;">UNETE A NUESTRO EQUIPO</a>
                    </div>
                </div>

            <div class="seccion3">
                <div class="Kgrandesec3">
                    <img src="{{asset('img/design/kgrandeicon.png')}}" alt="">
                </div>
                <div class="col-12 col-md-12 col-lg-12" style="height: 90%;">
                    <div class="col-12 col-md-12 col-lg-11 text-center d-flex justify-content-end" style="height: 100%; align-items: center;">
                            
                        <form action="" class="form-solicita col-12 col-md-12 col-lg-5">
                            <div class="col-12 mb-5 mt-5  d-flex justify-content-center" style="margin-top: 48px !important; margin-bottom: 48px !important;"><h1 class="col-8" style="color: white;">{!!$elements[3]->texto!!}</h1></div>
                            <div class="input-group mb-5">
                                <div class="form-control" style="background: none; border: none;">
                                    <input type="text" class="" id="nombre" name="nombre" placeholder="NOMBRE:" aria-label="NOMBRE:" style="width: 100%; background: none; border: none; color: white;" autocomplete="off">
                                    <div style=" width: 100%; height: 5px; background: white; border-radius: 10px"></div>
                                </div>
                                <div class="form-control" style="background: none; border: none;">
                                    <input type="text"  id="empresa" name="empresa" placeholder="EMPRESA:" aria-label="EMPRESA:" style="width: 100%; background: none; border: none; color: white;" autocomplete="off">
                                    <div style=" width: 100%; height: 5px; background: white; border-radius: 10px"></div>
                                </div>
                            </div>
                            <div class="input-group mb-5">
                                <div class="form-control" style="background: none; border: none;">
                                    <input  type="email" id="correo" name="correo" placeholder="CORREO:" aria-label="CORREO" style="width: 100%; background: none; border: none; color: white;" autocomplete="off">
                                    <div style=" width: 100%; height: 5px; background: white; border-radius: 10px"></div>
                                </div>
                                <div class="form-control" style="background: none; border: none;">
                                    <input type="text" id="telefono" name="whatsapp" placeholder="WHATSAPP:" aria-label="WHATSAPP" style="width: 100%; background: none; border: none; color: white;" autocomplete="off">
                                    <div style=" width: 100%; height: 5px; background: white; border-radius: 10px"></div>
                                </div>
                            </div>
                            <div class="input-group2">
                                <div class="form-control" style="background: none; border: none;">
                                    <input type="text" id="mensaje" name="mensaje" placeholder="MENSAJE:" aria-label="WHATSAPP:" style="width: 100%; background: none; border: none; color: white;" autocomplete="off">
                                    <div style=" width: 100%; height: 5px; background: white; border-radius: 10px"></div>
                                </div>
                            </div>
                                <div class="mt-3"><BUtton style="background: white; width: 130px; height: 30px; border: 3px solid red; border-radius: 30px; font-weight: bold; font-size: 12px;">ENVIAR</BUtton></div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        <!-- SECCION 3 end-->


        <!-- SECCION 4 start-->
            <div>

                
                    <div class="seccion4">

                        <div class="cartaGrandeSec4">
                            <div class="cartasec1">
                                <div class="col-12" style="height: 100%;">
                                    <div class="CT1sectitulo">
                                        <h1 class="mb-4">PRODUCTOS DISPONIBLES</h1>
                                        <div class="CT1Linea"></div>
                                        <div class="CT1Img">
                                            <img src="{{asset('img/design/iconDiaman.png')}}" alt="">
                                        </div>
        
                                    </div>
                                    <div class="CT1Context">
                                        <p>{!!$elements[4]->texto!!}</p>
                                    </div>
                                    <div class="CT1TxtDesc">
                                        <a href="">DESCARGA AQUI NUESTRO CATALOGO<i class="fas fa-arrow-down"></i></a>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
    
                    </div>
                


            </div>
        <!-- SECCION 4 end-->


	

	









		{{-- <form action="{{ route('formularioContac') }}" method="post">
			@csrf
			<div class="row d-flex justify-content-center mx-auto">
				<div class="col-lg-2 ">
					<input type="text" name="nombre" id="nombre" placeholder="NOMBRE:" class="form-control bordeagenda">
				</div>
				<div class="col-lg-2">
					<input type="email" name="correo" id="correo" placeholder="CORREO:" class="form-control bordeagenda">
				</div>
				<div class="col-lg-2">
					<input type="tel" name="telefono" id="telefono" placeholder="WHATSAPP:" class="form-control bordeagenda">
				</div>
				<div class="col-lg-2">
					<input type="text" name="mensaje" id="mensaje" placeholder="MENSAJE:" class="form-control bordeagenda">
				</div>

			</div>

			<div class="text-center mt-3 mb-5">
				<button type="submit" class="btn rounded-pill px-5" style="background-color: #e8542c ;">Enviar</button>
			</div>
		</form> --}}

	
@endsection

@section('jqueryExtra')



	<script type="text/javascript">
		$(document).ready(function() {
              $('.ContCardsSeccion2').slick({
                infinite: false,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: true,
                    variableWidth: true,
                    centerMode: false,
                    prevArrow: $('.btnAnterior'),
					nextArrow: $('.btnSiguiente'),
                    responsive: [
                        {
      breakpoint: 2000,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    },{
      breakpoint: 1367,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 796,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
                });
		});
	</script>
@endsection
