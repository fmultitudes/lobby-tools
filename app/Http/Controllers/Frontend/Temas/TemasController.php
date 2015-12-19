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
		$resp = array('q'=>$q,'list'=>array());
		return response()->json($resp);
	}

	public function realizadas($q)
	{
		$resp = array('q'=>$q,'list'=>array());
		return response()->json($resp);
	}

}