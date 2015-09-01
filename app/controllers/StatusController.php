<?php

class StatusController extends BaseController {

	public function getStatus() {
		$status = Status::select('ruta', 'estado')->get();
		return Response::json(array('status' => $status));
	}
}