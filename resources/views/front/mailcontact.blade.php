<html>
<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$data['asunto']}}</title>
</head>
<style>

	 
	/* position: absolute;
	 width: 0;
     height: 0;
	 margin: 0;
	 border-radius: 30px;
     border-right: 350px solid #f0ad4e;
     border-top: 200px solid transparent;
     border-left: 355px solid #f0ad4e;
     border-bottom: 100px solid #f0ad4e;
	 box-shadow: inset 0 0 15px 10px black; */
	.cont-correo{
		width: 100%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		padding-top: 100px;
	}
	 .cont-sobre-blanco{
		position: relative;
		background: #f04e4e;
		margin: 350px auto 50px;
		border: 1px gray dashed;
		border-radius: 20px;
		max-width:700px;
		height: 400px;
		width:100%;
		box-shadow: inset 0 0 100px 1px rgba(0, 0, 0, 0.646);
	 }
	 .correoMail{
	 position: absolute;
	 width: 0;
     height: 0;
	 margin-left: -3px;
	 margin-top: -5px;
	 height: 110px;
	 border-radius: 30px;
     border-right: 350px solid #fff;
     border-top: 200px solid transparent;
     border-left: 355px solid #fff;
     border-bottom: 100px solid #fff;
	 z-index: 1000;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	flex-direction: column
	 
	}
	.cont-correoMail{
		margin-left: 0px;
		height: 100px;
	}
	.cont-correoMail-txt{
		position: absolute;
		display: flex;
		flex-direction: column;
		margin-left: -220px;
		margin-top: 30px;
	}
	.cont-correoMail-txt a{
		margin-bottom: 10px;
	}
	.cont-correoMail-redes{
		position: absolute;
		display: flex;
		justify-content: center;
		margin-left: 320px;
		margin-top: 30px;
	}
	.Carta-back{
		display: block;
		position: absolute;
		margin: 0 15%;
		width: 70%;
		height: 600px;
		margin-top: -350px;
		background: rgb(252, 252, 239);
		border: 1px gray dashed;
		border-radius: 30px;
		display: flex;
		justify-content: center;

	}
	.cont-back-txt{
		margin-top: 30px;
		width: 90%;
	}
	.cont-back-txt-centrado{
		width: 100%;
		height: 230px;
		overflow-y: scroll;
    	scroll-behavior: auto;
	}
	.back-txt-centrado{
		width: 100%;
		text-align: center;
	}

	@media only screen and (max-width: 720px) {
		body{
			box-shadow:none !important;
		}
		.cont-sobre-blanco{
		border: none;
		background: none;
		box-shadow: none;

	 }
		.correoMail{
			margin-top: 300px;
			background: #f04e4e;
		}
		.Carta-back{
			margin: 0;
			margin-top: -400px;
			width: 100%;
			z-index: 1000;
		}

	
	}
	@media only screen and (max-width: 541px) {
		body{
			box-shadow:none !important;
		}
		.cont-sobre-blanco{
		border: none;
		background: none;
		box-shadow: none;

	 }
		.correoMail{
			margin-top: 700px;
			background: #f04e4e;
		}
		.Carta-back{
			margin: 0;
			margin-top: -400px;
			width: 82vh;
			height: 1000px;
			z-index: 1000;
			font-size: 30px;
		}
		.cont-back-txt-centrado{
			height: 600px;
		}

	
	}

</style>
<body style="
			margin: 0;
			background: rgb(221, 221, 221);
			background-size: cover;
			background-repeat: no-repeat;
    		background-position: center;
			font-family: Arial, Helvetica, sans-serif;
			box-shadow: inset 0 0 100px 1px rgba(0, 0, 0, 0.646);
			">

<div class="cont-correo">
	<div class="cont-sobre-blanco"><div class="correoMail">
		<div class="cont-correoMail">
			<img src="{{asset('img/design/logo.png')}}" style="width: 200px;background:#FFF;padding: 5px;border-radius: 5px;">
			<div class="cont-correoMail-txt">
				<a href="{{url('/')}}" style="color:#000;">{{url('/')}}</a>
				@if ($config->telefono)
					Tel: {{$config->telefono}}
					<br /><br/>
				@endif
			</div>
			<div class="cont-correoMail-redes">
				<a href="{{$config->instagram}}">
					<img src="https://img.icons8.com/color/64/000000/instagram-new.png">
				</a>
				<a href="{{$config->facebook}}">
					<img src="https://img.icons8.com/color/64/000000/facebook.png">
				</a>
			</div>
		</div>
	</div>
		<div class="Carta-back">
			<div class="cont-back-txt">
				<p>Nombre: <b> {{$data['nombre']}}</b></p>
			<p>Empresa: <b> {{$data['empresa']}}</b></p>
			<p>Telefono: <b> {{$data['telefono']}}</b></p>
			<p>Email: <b> {{$data['correo']}}</b></p>
			<div class="cont-back-txt-centrado">
			<p class="back-txt-centrado">Comentarios: <br> <b style="text-align:justify;"> {{$data['mensaje']}}</b></p>
			</div>
			<!-- Fecha -->
			<div style="
					width:100%;
					text-align:center;
					color:#333;
					font-size:15px;
					padding:1em 0;
					">
				{{$data['hoy']}}
			</div><!-- Fecha -->
			</div>
		</div>
	</div>
</div>
				
	{{-- <div style="
		background: #fff;
		margin: 250px auto 50px;
		border: 1px gray dashed;
		border-radius: 20px;
		max-width:700px;
		width:100%;
		
		">
		<div class="" style="
			margin: .6em auto;
			text-align:center;
			color:#333;
			font-size:25px;
			">
			{{$data['asunto']}}
		</div>
		<!-- Cuerpo del correo -->
		<div style="
				box-sizing: border-box;
				width:100%;
				text-align:center;
				color:#333;
				font-size:18px;
				padding:20px;
				">
			<p>Nombre: <b> {{$data['nombre']}}</b></p>
			<p>empresa: <b> {{$data['empresa']}}</b></p>
			<p>Telefono: <b> {{$data['telefono']}}</b></p>
			<p>Email: <b> {{$data['correo']}}</b></p>
			<p>Comentarios: <br> <b style="text-align:justify;"> {{$data['mensaje']}}</b></p>
			<!-- Fecha -->
			<div style="
					width:100%;
					text-align:center;
					color:#333;
					font-size:15px;
					padding:1em 0;
					">
				{{$data['hoy']}}
			</div><!-- Fecha -->
		</div><!-- Cuerpo del correo -->
	</div> --}}
{{-- 
	<div style="
		text-align:center;
		color:#000;
		margin-bottom: 3em;
		">
		<a href="{{url('/')}}"><img src="{{asset('img/design/logo.png')}}" style="width: 200px;background:#FFF;padding: 5px;border-radius: 5px;"></a>
		<br /><br />

		
	</div> --}}


</body>
</html>
