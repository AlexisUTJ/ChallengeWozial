@extends('layouts.front')

@section('title', 'Servicios')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')

<div>
	<style> 

	
	
		</style>
</div>

	    <!-- SECCION 1 -->
			<div class="index" style="padding-top: 0; background: #F7F7F7;">
				<div class="servicios">
					
						
							<div class="col-12 p-0 m-0 d-flex justify-content-center" style="">
								


									<div class="col-12 row" style="max-width: 1660px;">
										
										<div class="col-12 col-md-12 col-lg-6 row pt-5 d-flex justify-content-center" style=" height: 600px;  ">
											<div class="carousel col-12 ms-4" style=" min-width: 300px; max-width: 500px;">
												@if (!empty($photo_product->count()))
												@foreach ($photo_product as $photosP)
												
												<img src="{{ asset('img/photos/productos/'.$photosP->image)}}" class="img-slik rounded-circle m-5"  style=" max-width: 470px; max-height: 470px;">
												
												@endforeach
												
												@else
												
												<img src="{{ asset('img/design/police.png')}}" alt="police"  class="img-slik rounded-circle m-5"  style=" max-width: 470px;  max-height: 470px;">
												<img src="{{ asset('img/design/police.png')}}" alt="police"  class="img-slik rounded-circle m-5"  style=" max-width: 470px;  max-height: 470px;">
											
												@endif
											</div>

											<div class="BotonesSliderServisios col-12 d-flex justify-content-center">
												<button class="btnAnterior1">
													<i class="fas fa-chevron-left"></i>
												</button>
												<button class="btnSiguiente1">
													<i class="fas fa-chevron-right"></i>
												</button>
											</div>

											
											
										</div>

										<div class="col-12 col-md-12 col-lg-6 ps-md-5 pe-md-0 pe-lg-5 d-flex justify-content-sm-end justify-content-md-center justify-content-lg-end" style="padding-top: 200px ; ">
											<div class="col-12" style="background: white; border-radius: 30px ; box-shadow: 1px 1px 15px 3px rgba(0, 0, 0, 0.2); height: 670px; max-width: 600px;">
												<div class="ContTextCuadroServ">
													<h1>{{$serv->nombre}}</h1>
													<div class="LineRserviceC mt-2"></div>
													<div class="text-service-cont">
														{!!$serv->descripcion!!}
													</div>
													<div class="divBtnCuadro">
														<a href="{{ route('front.vacantes') }}"><button style="height: 40px;">CONTRATAR</button></a>
													</div>
												</div>
											</div>
										</div>





									</div>



								



								{{-- <div class="cont-img-poli col-12 col-md-12 col-lg-6">
									<div class="col-12 row d-flex justify-content-center">
										<div class="ContseccionIzqServicios1">
											
												@if (!empty($photo_product->count()))
												@foreach ($photo_product as $photosP)
												
												<img class="img-slick" src="{{ asset('img/photos/productos/'.$photosP->image)}}" alt="" >
												
												@endforeach
												
												@else
												
												<img src="{{ asset('img/design/police.png')}}" alt="police"  style="border-radius:500px; width:470px ; height: 470px;">
												<img src="{{ asset('img/design/police.png')}}" alt="police"  style="border-radius:500px; width:470px ; height: 470px;">
											
												@endif
											
										</div>
										<div class="BotonesSliderServisios col-12 d-flex justify-content-center">
											<button class="btnAnterior1">
												<i class="fas fa-chevron-left"></i>
											</button>
											<button class="btnSiguiente1">
												<i class="fas fa-chevron-right"></i>
											</button>
										</div>
									</div>
								</div>


										<div class="col-12 col-md-12 col-lg-6 d-flex justify-content-center">
											<div class="cont-blanco-serv col-12" style="background: white; border-radius: 30px ; box-shadow: 1px 1px 15px 3px rgba(0, 0, 0, 0.2);">
												<div class="ContTextCuadroServ">
													<h1>{{$serv->nombre}}</h1>
													<div class="LineRserviceC mt-2"></div>
												</div>
												<div class="text-service-cont">
													{!!$serv->descripcion!!}
												</div>
												<div class="divBtnCuadro">
													<a href=""><button style="height: 40px;">CONTRATAR</button></a>
												</div>
											</div>

										</div> --}}

							</div>
						
					
				</div>
        <!-- SECCION 1 -->

        <!-- SECCION 2 -->

		<div class="col-12" style="background: white">
			@if (!empty($productos_rel->count()))
			<div class="seccion2Service" style="margin: 0; padding-bottom: 100px; padding-top: 0px">
				<div class="tituloSeccion2Service">
					<h1>OTROS SERVICIOS</h1>
					<div class="contLinSec2Serv mt-3">
						<div class="contLinSec2">
							<div class="linSec2"></div>
						</div>    
					</div>
				</div>
	
	
	
	
								<div class="ContCardsSeccion2_1" >
									<div class="ContCardsSeccion3">
					
					
									@foreach($productos_rel as $Prod_rel)
									{{-- CARD --}}
									<a>
										<div class="cadrSec2">
											<div class="titCardSec2 mt-2">
												<h2 style="font-weight: bold; font-size: 20px;">
												{{$Prod_rel->nombre}}
												</h2>
												<div class="linCard2"></div>
											</div>
											<div class="ContTxtCadrSec3 px-3">
												<p class="m-0">
												{!!$Prod_rel->descripcion!!}
												</p>
											</div>
					
											<div class="ContCicCardSec2">
												<div class="contDiamsec2">
													<img src="{{asset('img/design/iconDiaman.png')}}" alt="">
												</div>
												<div class="circles2">
													@if (!empty($Prod_rel->photo))
													<img src="{{ asset('img/photos/productos/'.$Prod_rel->photo)}}" alt="">
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
								</div>
	
	
								{{-- BOTONES DE SLIDER --}}
								<div class="BotonesSliderSec2">
									<button class="btnAnterior">
										<i class="fas fa-chevron-left"></i>
									</button>
									<button class="btnSiguiente">
										<i class="fas fa-chevron-right"></i>
									</button>
								</div>
								{{-- BOTONES DE SLIDER --}}
							</div>
						<div>
	
	
						
	
	
			</div>
		</div>

		
		
		
		@else
			<div class="cont-div-spacing col-12" style="min-height: 100px; max-height: 100px; background: #F7F7F7; display: flex; align-items: center; justify-content: center;">
				<div style="width: 97%; height: 100%;     border-left:7px solid #fff;
				border-right: 7px solid #fff;">

				</div>
			</div>

		@endif

        <!-- SECCION 2 -->

        <!-- SECCION 3 -->
            <div class="seccion3-service">
				<div class="seccion3">
					<div class="Kgrandesec3">
						<img src="{{asset('img/design/kgrandeicon.png')}}" alt="">
					</div>
					<div class="col-12 col-md-12 col-lg-12" style="height: 90%;">
						<div class="col-12 col-md-12 col-lg-11 text-center d-flex justify-content-end" style="height: 100%; align-items: center;">
								
							<form action="" class="form-solicita col-12 col-md-12 col-lg-5">
								<div class="col-12 mb-5 mt-5  d-flex justify-content-center"><h1 class="col-8" style="color: white;">SOLICITA TU COTIZACION</h1></div>
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
		</div>
        <!-- SECCION 3 -->
@endsection

@section('jqueryExtra')



	<script type="text/javascript">
		$(document).ready(function() {
              $('.ContCardsSeccion3').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: true,
                    variableWidth: true,
					prevArrow: $('.btnAnterior'),
					nextArrow: $('.btnSiguiente'),
                });


				$('.carousel').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: false,
					centerMode: true,
                    variableWidth: true,
					prevArrow: $('.btnAnterior1'),
					nextArrow: $('.btnSiguiente1'),

                });
		});
	</script>
@endsection



