<?php

class AdminController extends BaseController {

	public function showAdmin() {
		return View::make('admin');
	}

	public function getUpdate() {
		$estados = Status::select('estado')->get();
		return Response::json(array('estados' => $estados));
	}

	public function postUpdate() {
		$ruta = Status::find(Input::get('id'));
		$ruta->estado = Input::get('status');
		$ruta->save();
	}

	public function login() {
		$user = array(
  			'username' => Input::get('username'),
  			'password' => Input::get('password')
		);
		if (Auth::attempt($user)) {
			return Redirect::back();
		} else {
			return Redirect::back()->with('error', 'El usuario o contraseña es incorrecto')->withInput();
		}	
	}
}