<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/**
	 * Show search. 
	 *
	 * @return Response
	 */
	public function searchUsers()
	{
		return View::make('search');
	}

	/**
	 * Get usernames. 
	 *
	 * @return Response
	 */
	public function getUsernames()
	{
		return User::where('name', 'LIKE', '%' . Input::get('term') . '%')
					->lists('name');
	}

}
