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
              $camping = Camping::latest()->get();
              $sellers = Seller::latest()->get();
              $users = User::all();

              return view('dashboard.index', compact('camping', 'sellers', 'users'));
       }
}
