<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MyPost;


class UploadFileController extends Controller
{
    public function index()
    {
    return view('upload');
    }

    public function upload(Request $req){
        $data=$req->except('_token', 'file');

        $req->validate([
            'file' => 'required'
        ]);

        $image_name = time().'.'.request()->file->getClientOriginalExtension();


        $req->file->move(public_path('myposts'),$image_name);
        $data["image_name"]=$image_name;
        MyPost::create($data);

        return redirect()->route('posts');
    }

}
