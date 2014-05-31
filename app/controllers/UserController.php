<?php

class UserController extends Controller
{
	/**
	* Setup the layout used by the controller.
	*
	* @return void
	*/
	public function getIndex()
	{
		$users = User::all();
		return View::make('users')->with('users', $users);
	}
}
