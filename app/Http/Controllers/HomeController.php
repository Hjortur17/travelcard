<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class HomeController extends Controller
{
	public function index($lang)
	{
		App::setlocale($lang);
		return view('posts.index');
	}

	public function show()
	{
		return view('posts.home');
	}
}
