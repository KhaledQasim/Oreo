<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{






    public function indexPhotos()
    {
        return view('photos');
    }

    public function getPhotos($id)
    {
        $photo = Photo::find($id);
        return view('photos', array('photo' => $photo));

    }


    public function indexType()
    {
        return view('type');
    }

    public function getType($type)
    {
        $photo = Photo::all();

        return view('type')->with('photo', $photo);
    }

















}
