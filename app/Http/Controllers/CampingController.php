<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Camping;

class CampingController extends Controller
{
	public function index()
	{
		$places = Camping::latest()->get(); 

		return view('posts.camping', compact('places'));
	}

	public function show(Camping $place)
	{
		return view('posts.show', compact('place'));
	}
}
