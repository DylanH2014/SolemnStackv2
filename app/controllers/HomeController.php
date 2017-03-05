<?php

class HomeController extends BaseController {


	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }

	public function homepage()
	{
		return View::make('homepage');
	}


	public function showLogin() {

		return View::make('login');

	}

	public function doLogin() {

		$rules = array(
			'email'    => 'required|email',
			'password' => 'required|alphaNum|min:6'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {

			$userdata = array(
				'email'    => Input::get('email'),
				'password' => Input::get('password')
			);

			if(Auth::attempt($userdata)) {
				// dd('success');
				return View::make('homepage');
				// return Redirect::to('homepage');
			} else {
				return Redirect::to('login');
			}
		}

	}

	public function doLogout() {

		Auth::logout();
		return Redirect::to('login');

	}

}
