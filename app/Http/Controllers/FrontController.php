<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\ProductosPhoto;
use App\Elemento;
use App\Carrusel;
use App\Politica;
use App\Vacante;
use App\Faq;
use App\Categoria;
use App\Configuracion;
use App\Producto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class FrontController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
		public function index(){

			$carrusel = Carrusel::orderBy('orden','asc')->get();

			foreach ($carrusel as $carru) {
				if ($carru->video) {
					if (Str::contains($carru->video, 'v=')) {
						$pos=strpos($carru->video, 'v');
						$videoPhoto=substr($carru->video, ($pos+2));
					}

					if (Str::contains($carru->video, 'youtu.be')) {
						$pos=strrpos($carru->video, '/');
						$videoPhoto=substr($carru->video, ($pos+1));
					}

					$carru->video = [
						'url' => $carru->video,
						'idVideo' => $videoPhoto
					];
				}
			}

			$elements = Elemento::where('seccion',1)->get();
			// $elements = Elemento::where('seccion',1)->get();
			// return view('front.index',compact('elements'));
			$desta = Producto::where('activo',1)->where('inicio',1)->get();
			
			foreach ($desta as $it) {
				$desc = strip_tags(htmlspecialchars_decode($it->descripcion));
				$it->descripcion = Str::words($desc, 40, '...');
				$photo_product = ProductosPhoto::where('producto',$it->id)->orderBy('orden','ASC')->first();
				
				$it->fotito = (!empty($photo_product)) ? $photo_product['image'] : null ;;
			}
			// dd($desta);

			return view('front.index',compact('carrusel','elements','desta'));
	}

	public function servicios(Producto $serv){
		// dd($serv->id);
		if($serv->id == null){
			return redirect()->back();
		}
		$seccion = Seccion::find(2);
		$elements = Elemento::where('seccion', $seccion->id)->get();

		$fianzas = Producto::where('activo',1)->where('categoria',1)->get(['id','nombre']);
		$seguros = Producto::where('activo',1)->where('categoria',2)->get(['id','nombre']);
		$servicios = array(
			'fianzas' => $fianzas,
			'seguros' => $seguros,
		);

		$productos_rel = $serv->relacionados()->get()->pluck('otroProducto');

		$productos_rel = Producto::whereIn('id', $productos_rel)->get();

		
		foreach ($productos_rel as $prodimg) {
			$fphoto = ProductosPhoto::where('producto',$prodimg->id)->orderBy('orden','ASC')->get()->first();
			$prodimg->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
		}

		$photo_product = ProductosPhoto::where('producto',$serv->id)->orderBy('orden','ASC')->get();

		// if(!empty($productos_rel->count())){
		// 	dd("viene con datos");
		// }else{
		// 	dd("No viene");
		// }
		// echo($productos_rel);
		// dd($productos_rel);
		
		return view('front.servicios',compact('elements','servicios','serv','productos_rel','photo_product'));
	}

	public function getServicio(Request $request){
		$producto = Producto::find($request->service);
		return response()->json($producto,200);
	}

	public function contacto(){
		$seccion = Seccion::find(6);
		$elements = Elemento::where('seccion', $seccion->id)->get();

		return view('front.contacto',compact('elements'));
	}

	public function details(Producto $product){
		// $product = Producto::find($producto);

		$product->categoria = Categoria::find($product->categoria);

		$product->gallery = $product->fotos()->orderBy('orden', 'asc')->get();

		// $variantes = ProductoVariante::where('producto', $product->id)->get();
		$medidas = ProductoMedida::where('producto',$product->id)->orderBy('orden', 'asc')->get();
		// return view('front.detalles', compact('product','variantes','productos_rel','elements'));
		$data = array(
			'product' => $product,
			'medidas' => $medidas,
		);
		return response()->json($data);
		// return $product;
	}

	public function aboutus(){
		$seccion = Seccion::find(5);
		$elements  = Elemento::where('seccion',$seccion->id)->get();

		return view('front.aboutus', compact('elements', 'seccion',));
		// return view('front.aboutus');
	}
	public function vacantes(){
		$seccion = Seccion::find(4);
		$elements = Elemento::where('seccion', $seccion->id)->get();
		$vacantes = Vacante ::where('activo',1)->get();

		//$vacantes->requisitos=explode(";",$vacantes->requisitos);
		//dd($vacantes[]->requisitos=explode(";",$vacantes[]->requisitos));
		return view('front.vacantes',compact('elements','vacantes'));
		// return view('front.aboutus');
	}
	public function soluciones(){
		$seccion = Seccion::find(3);
		$elements = Elemento::where('seccion', $seccion->id)->get();
		return view('front.soluciones',compact('elements'));
		// return view('front.aboutus');
	}
	public function garantias(){
		$politica = Politica::find(5);
		return view('front.politicas',compact("politica"));
	}

	public function aviso(){
		$politica = Politica::find(1);
		return view('front.politicas',compact("politica"));
	}

	public function pagos(){
		$politica = Politica::find(2);
		return view('front.politicas',compact("politica"));
	}

	public function devoluciones(){
		$politica = Politica::find(3);
		return view('front.politicas',compact("politica"));
	}

	public function tyc(){
		$politica = Politica::find(4);
		return view('front.politicas',compact("politica"));
	}

	public function preguntas(){
		$preguntas = Faq::all();
		return view('front.faq',compact("preguntas"));
	}

	// correo de contacto normal
	public function mailcontact(Request $request){
		$validate = Validator::make($request->all(),[
			'nombre' => 'required',
			'correo' => 'required',
			'telefono' => 'required|numeric',
			'mensaje' => 'nullable',
		],[],[]);

		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos datos');
			return redirect()->back();
		}

		$data = array(
			'nombre' => $request->nombre,
			'empresa' => $request->empresa,
			'correo' => $request->correo,
			'telefono' => $request->telefono,
			'mensaje' => $request->mensaje,
			'asunto' => 'Formulario de contacto',
			'hoy' => Carbon::now()->format('d-m-Y')
		);

		$html = view('front.mailcontact',compact('data'));

		$config = Configuracion::first();

		$mail = new PHPMailer;

		try {
			$mail->isSMTP();
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			// $mail->SMTPDebug = 2;
			$mail->Host = $config->remitentehost;
			$mail->Port = $config->remitenteport;
			$mail->SMTPAuth = true;
			$mail->Username = $config->remitente;
			$mail->Password = $config->remitentepass;
			$mail->SMTPSecure = $config->remitenteseguridad;
			$mail->SetFrom($config->remitente, $config->title);
			$mail->isHTML(true);

			$mail->addAddress($config->destinatario,$config->title);
			if (!empty($config->destinatario2)) {
				$mail->AddBCC($config->destinatario2,$config->title);
			}
			$mail->Subject = $data['asunto'];
			$mail->msgHTML($html);
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			\Toastr::success('Correo enviado Exitosamente!');
				return redirect()->back();
		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			echo $e->getMessage(); //Boring error messages from anything else!
		}

	}

}
