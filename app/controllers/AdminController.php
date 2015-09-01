<?php

class AdminController extends BaseController {

	public function showAdmin() {
		return View::make('admin');
	}

	public function postUpdate() {
		$ruta = Status::find(Input::get('id'));
		$ruta->estado = Input::get('status');
		$ruta->save();
	}
}