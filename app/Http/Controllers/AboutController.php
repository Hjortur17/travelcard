<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Mail;

use App\Camping;
use App\Seller;

class AboutController extends Controller
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

		return view('posts.about', compact('places','vl_places','vf_places','n_places','n_places','a_places','s_places'));
	}

	public function show($lang)
	{
		App::setlocale($lang);

		$places = Camping::latest()->get();
		$sellers = Seller::latest()->get();
		
		$vl_places = Camping::where('state', 'vesturland')->get();
		$vf_places = Camping::where('state', 'vestfirdir')->get();
		$n_places = Camping::where('state', 'nordurland')->get();
		$a_places = Camping::where('state', 'austurland')->get();
		$s_places = Camping::where('state', 'sudurland')->get();

		return view('posts.sellers', compact('places','sellers','vl_places','vf_places','n_places','n_places','a_places','s_places'));
	}

	public function store(Request $request)
	{
		$this->validate(request(), [
                     'name' => 'required',
                     'email' => 'required|email',
                     'email' => 'required',
                     'message' => 'required',
              ]);

              $data = array(
              	'name' => request('name'),
              	'email' => request('email'),
              	'subject' => request('subject'),
                     'bodyMessage' => request('message'),
              );

              Mail::send('mails.contact', $data, function ($message) use ($data) {
              	$message->from($data['email']);
              	$message->to('travelcard@travelcard.is');
              	$message->subject($data['subject']);
              });

		return back();
	}
}
