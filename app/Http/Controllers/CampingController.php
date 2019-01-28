<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Camping;
use App;

class CampingController extends Controller
{
	public function index($lang)
	{
		$places = Camping::latest()->get(); 

		App::setlocale($lang);
		return view('posts.camping', compact('places'));
	}

	public function show($lang, $id) 
	{
		App::setlocale($lang);
		$camping = Camping::findOrFail($id);
		
		return view('posts.show', ['camping' => $camping]);
	}
}
