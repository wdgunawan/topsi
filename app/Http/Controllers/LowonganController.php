<?php namespace App\Http\Controllers;
		use Lowongan;

class LowonganController extends CRUDController {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/


	public function __construct (Lowongan $model){
		$this->model = $model;
	}
	


}
