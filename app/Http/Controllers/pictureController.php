<?php

namespace App\Http\Controllers;
use App\picture;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class pictureController extends Controller
{

    public function fileupload(){
        return view('fileupload');
    }

    public function filestore(Request $request) {
        $name = $request->input('name');
        $file = $request->file('image');
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = $file->getClientOriginalName();
        $path = $file->move('uploads/image/',$filename);

        picture::create([
            'name' => $name,
            'url' => $path,
        ]);

        return view('/viewimage');
    }

    public function viewimage(){
        $images = picture::all();
        return view('viewimage',['images'=>$images]);
    }
}
