<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function saveImg(Request $req)
    {
        // if($req->)
        $image = $req->file('image-upload');
        $image->store('image','public');
        // dd($image);
        return back();
    }
}
