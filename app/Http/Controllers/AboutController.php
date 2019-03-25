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

		return view('posts.about');
	}

	public function showSellers ($lang)
	{
		App::setlocale($lang);

		return view('posts.sellers');
	}

	public function showCurrency ($lang)
	{
		App::setlocale($lang);

		return view('posts.sellers');
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
