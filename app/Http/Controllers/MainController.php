<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class MainController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('gallery.index', ['photos'=>$photos]);
    }
}
