<?php

namespace App\Http\Controllers;
use Storage;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PhotoController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:255',
            'description'=>'required|max:255',
            'photo'=>'required|mimes:jpeg,jpg'
        ]);
        $img = $request->file('photo');
        $name = time() . $img->getClientOriginalName();
        $img->move('public', $name);
        Photo::create(['photo'=>$name]);

        $photo = new Photo();
        $photo->name = $request->name;
        $photo->description = $request->description;
        $photo->url = 'public/public/' . $request->photo;

        $photo->save();

        return view('/home');
    }
}
