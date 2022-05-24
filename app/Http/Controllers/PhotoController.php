<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{


    public function index()
    {
        return view('show');
    }


    public function getPhotos()
    {
        $photos = Photo::all();

        return view('show')->with('photos', $photos);
    }



    public function indexGallery()
    {
        return view('gallery');
    }

    public function getGallery($id)
    {
        $photo = Photo::find($id);
        return view('gallery', array('photo' => $photo));

    }








    public function indexAcrylic()
    {
        return view('acrylic');
    }


    public function getPhotosAcrylic()
    {
        $photos = Photo::all();

        return view('acrylic')->with('photos', $photos);
    }



    public function indexGalleryAcrylic()
    {
        return view('acrylic');
    }

    public function getGalleryAcrylic($id)
    {
        $photo = Photo::find($id);
        return view('acrylic', array('photo' => $photo));
    }



}
