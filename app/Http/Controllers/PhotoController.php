<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{


    public function index()
    {
        $url = request()->segment(count(request()->segments()));
        return view($url);
    }


    public function get()
    {
        $photos = Photo::all();
        $url = request()->segment(count(request()->segments()));
        return view($url)->with('photos', $photos);
    }



    public function indexPhotos()
    {
        return view('photos');
    }

    public function getPhotos($id)
    {
        $photo = Photo::find($id);
        return view('photos', array('photo' => $photo));

    }

















}
