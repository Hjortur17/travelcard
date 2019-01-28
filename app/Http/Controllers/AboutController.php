<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class AboutController extends Controller
{
	public function index($lang)
	{
		App::setlocale($lang);
		return view('posts.about');
	}

	public function show($lang)
	{
		App::setlocale($lang);
		return view('posts.terms');
	}
}
