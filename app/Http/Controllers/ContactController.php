<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class ContactController extends Controller
{
	public function index(Request $request)
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

		return redirect()->route('home');
	}
}
