<?php namespace App\Http\Controllers\Frontend\Temas;

use App\Http\Controllers\Controller;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class TemasController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{

		$view = view('frontend.temas.index');

		return $view;
	}

	public function rechazadas($q)
	{

		$url = 'https://docs.google.com/spreadsheets/d/1qxVqiUQNXyl26pY7f16OP5oWSCbp4wmykwgAJi762bc/pub?output=csv';

		$headers = false;

		$list = array();

		// open file for reading
		if (($handle = fopen($url, "r")) !== FALSE)
		{
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		    	if($headers){
			        $totalrows = count($data)-1;
			        $temp = array();
			        for ($row=0; $row<=$totalrows; $row++)
			        {
			        	$temp[$headers[$row]] = $data[$row];
			        }
			        $list[] = $temp;
		    	} else {
		    		$headers = $data;
		    	}
		    }
		    fclose($handle);
		}

		$collection = collect($list)->reject(function ($r) use($q) {
		    return !(strpos(strtolower($r['materia_resumen']), strtolower($q))>-1);
		});

		$resp = array('q'=>$q,'list'=>$collection);

		return response()->json($resp);
	}

	public function realizadas($q)
	{
		//$url = 'http://datos.infolobby.cl/sparql?default-graph-uri=http%3A%2F%2Fdatos.infolobby.cl%2Finfolobby&query=DEFINE+input%3Ainference+%3Chttp%3A%2F%2Fdatos.infolobby.cl%2Finfolobby%3E%0D%0A+%0D%0Aselect+distinct+*+where+%7B%0D%0A+%0D%0A%3Fs+a+cplt%3ARegistroAudiencia.%0D%0A%3Fs+cplt%3AcodigoURI+%3FcodigoAudiencia.%0D%0A%3Fs+cplt%3AfechaRealizado+%3Ffecha.%0D%0A%3Fs+cplt%3AdatosPasivos+%3Fpasivo.%0D%0A%3Fs+cplt%3AdatosActivos+%3Factivos.%0D%0A%3Fs+cplt%3AdatosMaterias+%3Fmaterias.%0D%0A%3Fs+cplt%3AregistradoPor+%3Finstitucion.%0D%0A%3Finstitucion+foaf%3Aname+%3FnombreInstitucion.%0D%0A%3Fs+cplt%3Aobservaciones+%3Fobservaciones.%0D%0A+%0D%0AFILTER+%0D%0A%28regex%28%3Fobservaciones%2C+%22'.$q.'%22%2C+%22i%22%29+%7C%7C+regex%28%3Fmaterias%2C+%22'.$q.'%22%2C+%22i%22%29%29%0D%0A%7D%0D%0AORDER+BY+DESC%28%3Fpasivo%29%0D%0ALIMIT+100&should-sponge=&format=application%2Fsparql-results%2Bjson&timeout=0&debug=on';
		$url = 'http://datos.infolobby.cl/sparql?default-graph-uri=http%3A%2F%2Fdatos.infolobby.cl%2Finfolobby&query=DEFINE+input%3Ainference+%3Chttp%3A%2F%2Fdatos.infolobby.cl%2Finfolobby%3E%0D%0A+%0D%0Aselect+distinct+*+where+%7B%0D%0A+%0D%0A%3Fs+a+cplt%3ARegistroAudiencia.%0D%0A%3Fs+cplt%3AcodigoURI+%3FcodigoAudiencia.%0D%0A%3Fs+cplt%3AfechaRealizado+%3Ffecha.%0D%0A+++++++++%3Ffecha+time%3AhasBeginning+%3Finstante.%0D%0A+++++++++%3Finstante+time%3Aday+%3Fdia.%0D%0A+++++++++%3Finstante+time%3Amonth+%3Fmes.%0D%0A+++++++++%3Finstante+time%3Ayear+%3Fagno.%0D%0A%3Fs+cplt%3AdatosPasivos+%3Fpasivo.%0D%0A%3Fs+cplt%3AdatosActivos+%3Factivos.%0D%0A%3Fs+cplt%3AdatosMaterias+%3Fmaterias.%0D%0A%3Fs+cplt%3AregistradoPor+%3Finstitucion.%0D%0A%3Finstitucion+foaf%3Aname+%3FnombreInstitucion.%0D%0A%3Fs+cplt%3Aobservaciones+%3Fobservaciones.%0D%0A+%0D%0AFILTER+%0D%0A%28regex%28%3Fobservaciones%2C+%22estacionamientos%22%2C+%22i%22%29+%7C%7C+regex%28%3Fmaterias%2C+%22estacionamientos%22%2C+%22i%22%29%29%0D%0A%7D%0D%0AORDER+BY+DESC%28%3Fpasivo%29%0D%0ALIMIT+100&should-sponge=&format=application%2Fsparql-results%2Bjson&timeout=0&debug=on';

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);

		if ($curl_response === false) {
		    $info = curl_getinfo($curl);
		    curl_close($curl);
		    die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		
		$decoded = json_decode($curl_response);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		    die('error occured: ' . $decoded->response->errormessage);
		}

		$resp = array('q'=>$q,'list'=>$decoded->results->bindings);
		return response()->json($resp);
	}

}