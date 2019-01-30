<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Mail;

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

	public function store(Request $request)
	{
		$this->validate(request(), [
                     'name' => 'required',
                     'email' => 'required|email',
                     'email' => 'required',
                     'message' => 'required|min:20',
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
