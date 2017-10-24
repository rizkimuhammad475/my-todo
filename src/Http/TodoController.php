<?php

namespace Amitav\Todo\Http;

use Amitav\Todo\Todo;
use App\Http\Controllers\Controller;

/**
* 
*/
class TodoController extends Controller
{
	public function index()
	{
		$todos 	=	Todo::orderBy('created_at')->get();
		return view('todo::todo-list', compact('todos'));
	}
}