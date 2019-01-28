<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use App\Camping;

class AboutController extends Controller
{
	public function index($lang)
	{
		App::setlocale($lang);

		$places = Camping::latest()->get();
		return view('posts.about', compact('places'));
	}

	public function show($lang)
	{
		App::setlocale($lang);

		$places = Camping::latest()->get();
		return view('posts.terms', compact('places'));
	}
}
