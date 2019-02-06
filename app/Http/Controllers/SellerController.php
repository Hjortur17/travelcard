<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Seller;

class SellerController extends Controller
{
	public function __construct()
       {
              $this->middleware('auth');
              $this->middleware('admin')->only('destory');
       }

	public function index()
       {
              $sellers = Seller::latest()->get();

              return view('dashboard.sellers.index', compact('sellers'));
       }

       public function show()
       {
              $sellers = Seller::orderBy('state')->paginate(15);

              return view('dashboard.sellers.show', compact('sellers'));
       }

       public function store(Request $request)
       {
              $this->validate($request, [
                     'name'         =>      'required',
                     'states'        =>      'required',
                     'address'       =>      'required',
              ]);

              $sellers = Seller::create([
                     'name'          =>      request('name'),     
                     'state'         =>      request('states'),     
                     'address'       =>      request('address'),
              ]);

              return redirect()->route('dashboard');
       }

       public function showUpdate($id) 
       {
              $seller = Seller::findOrFail($id);
              
              return view('dashboard.sellers.update', compact('seller'));
       }

       public function update(Request $request, $id)
       {
              $seller = Seller::where('id', '=', $id)->first();
              $seller->update($request->all());
              // $request->image->store('images', 'public');

              return redirect('/stjornbord/sölustaðir/breyta');
       }

       public function destory($id)
       {
              $seller = Seller::where('id', '=', $id)->first();
              $seller->delete();

              return redirect('/stjornbord/sölustaðir/breyta');
       }
}
