<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Camping;
use App\Seller;

class HomeController extends Controller
{
	public function index($lang)
	{
		App::setlocale($lang);

		return view('posts.index');
	}
}
