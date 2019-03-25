<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Camping;
use App\Seller;

class DashboardController extends Controller
{
       public function __construct()
       {
              $this->middleware('auth');
       }

       public function index()
       {
              $users = User::all();

              return view('dashboard.index', compact('users'));
       }
}
