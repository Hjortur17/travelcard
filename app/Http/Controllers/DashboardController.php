<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Camping;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camping = Camping::latest()->get();

        return view('dashboard.index', compact('camping'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         =>      'required',
            'en_title'      =>      'required',
            'states'        =>      'required',
            'address'       =>      'required',
            'body'          =>      'required',
            'en_body'       =>      'required',
            'phone'         =>      'required',
            'email'         =>      'required|email',
            'website'       =>      'required',
            'opening'       =>      'required',
            'image'         =>      'required|image',
        ]);

        $camping = Camping::create([
            'title'         =>      request('title'),     
            'en_title'      =>      request('en_title'),  
            'state'         =>      request('states'),     
            'address'       =>      request('address'),   
            'body'          =>      request('body'),      
            'en_body'       =>      request('en_body'),   
            'phone'         =>      request('phone'),     
            'email'         =>      request('email'),     
            'website'       =>      request('website'),   
            'opening'       =>      request('opening'),
            'image_path'    =>      request()->file('image')->store('images', 'public')
        ]);

        return redirect('/stjornbord/bæta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $camping = Camping::latest()->paginate(15);

        return view('dashboard.show', compact('camping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
