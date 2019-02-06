<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use App\Camping;

class QuestionController extends Controller
{
	public function index($lang)
	{
		App::setlocale($lang);

		$places = Camping::latest()->get();
		
		$vl_places = Camping::where('state', 'vesturland')->get();
		$vf_places = Camping::where('state', 'vestfirdir')->get();
		$n_places = Camping::where('state', 'nordurland')->get();
		$a_places = Camping::where('state', 'austurland')->get();
		$s_places = Camping::where('state', 'sudurland')->get();

		return view('posts.qAndA', compact('places','vl_places','vf_places','n_places','n_places','a_places','s_places'));
	}	
}
