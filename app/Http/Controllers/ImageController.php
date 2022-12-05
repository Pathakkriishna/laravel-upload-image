<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    public function saveImg(Request $req)
    {
        // if($req->)
        $image = $req->file('image-upload');
        $image->store('image','public');
        // dd($image);
        $file_path = $image->store('image','public');
        image::create([
            'path' => $file_path,
        ]);
        return back();
    }
}
