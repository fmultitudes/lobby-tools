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

		if(\Input::has('q')){
			$view->withQuery(\Input::get('q'));
			$view->withRechazadas(array(1));
			$view->withRealizadas(array(2));
		}
		return $view;
	}

}