<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Camping;
use App\Tag;

class CampingController extends Controller
{
       public function __construct()
       {
              $this->middleware('auth')->except('index', 'show');
              $this->middleware('admin')->only('destory');
       }

	public function index($lang)
	{
		App::setlocale($lang);
		
		return view('posts.camping');
	}

	public function show($lang, Camping $camping) 
	{
		App::setlocale($lang);
		
		return view('posts.show', ['camping' => $camping]);
	}


	public function dashboardIndex()
       {
              $tags = Tag::all();

              return view('dashboard.camping.index', compact('tags'));
       }


       public function dashboardShow()
       {
              $camping = Camping::orderBy('state')->paginate(15);

              return view('dashboard.camping.show', compact('camping'));
       }

       public function store(Request $request)
       {
              $this->validate($request, [
                     'title'         =>      'required',
                     'en_title'      =>      'required',
                     'state'         =>      'required',
                     'address'       =>      'required',
                     'body'          =>      'required',
                     'en_body'       =>      'required',
                     'phone'         =>      'required',
                     'email'         =>      'required|email',
                     'website'       =>      'required',
                     'opening'       =>      'required',
              ]);

              $camping = Camping::create($request->except('tags'));
              $camping->image_path = $request->file('image_path')->store('images', 'public');
              $camping->slug = str_slug($request->title);
              $camping->save();
              $camping->tags()->sync($request->tags);

              return redirect()->route('dashboard');
       }

       public function showUpdate($id) 
       {
              $camping = Camping::findOrFail($id);
              
              return view('dashboard.camping.update', compact('camping'));
       }

       public function update(Request $request, $id)
       {
              $camping = Camping::where('id', '=', $id)->first();

              $data = $request->except('image_path');
              $data['image_path'] = request()->file('image_path')->store('images', 'public');
              
              $camping->update($data);

              return redirect('/stjornbord/tjaldsvæði/breyta');
       }

       public function destory($id)
       {
              $camping = Camping::where('id', '=', $id)->first();
              $camping->delete();

              return redirect('/stjornbord/tjaldsvæði/breyta');
       }
}
