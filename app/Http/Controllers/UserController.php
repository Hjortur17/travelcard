<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
	public function __construct()
       {
              $this->middleware('auth');
              $this->middleware('admin')->only('destory');
       }

       public function index() 
       {
              $user = User::latest()->get();

              return view('dashboard.user.index', compact('user'));
       }

       public function show($id) 
       {
              $user = User::findOrFail($id);
              
              return view('dashboard.user.show', compact('user'));
       }

       public function store(Request $request) 
       {
              $this->validate($request, [
                     'name'               =>      'required',
                     'username'           =>      'required',
                     'email'              =>      'required|email',
                     'role'               =>      'required',
                     'password'           =>      'required',
              ]);

              $user = User::create([
                     'name'               =>      request('name'),     
                     'username'           =>      request('username'),     
                     'email'              =>      request('email'),     
                     'role'               =>      request('role'),     
                     'password'           =>      Hash::make(request('password')),
              ]);

              return redirect()->route('dashboard');
       }

       public function update(Request $request, $id)
       {
              $user = User::where('id', '=', $id)->first();
              $user->update($request->all());

              return redirect()->route('dashboard');
       }

       public function destory($id)
       {
              $user = User::where('id', '=', $id)->first();
              $user->delete();

              return redirect()->route('dashboard');
       }
}
