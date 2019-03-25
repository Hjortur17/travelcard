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

		return view('posts.qAndA');
	}	
}
