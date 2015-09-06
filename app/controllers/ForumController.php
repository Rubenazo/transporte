<?php

class ForumController extends BaseController {

	public function postComment() {
		$inp = Input::all();

		$rules = array(
			'message' 	=> 'required',
		);
		$msg = array(
			'required' => 'Campo obligatorio.',
		);

		$validator = Validator::make($inp, $rules, $msg);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$message = new Comment;
		$message->comentario = $inp['message'];

		if ($message->save()) {
			Session::flash('success','Comentario añadido');
			return Redirect::to('/');
		}else {
			Session::flash('danger','Error al añadir comentario');
			return Redirect::back()->withInput();
		}
	}

	public function getComments() {
		$comments = Comment::select('comentario', 'created_at as fecha')->orderBy('fecha', 'desc')->take(20)->get();
		return Response::json(array('comments' => $comments));
	}
}