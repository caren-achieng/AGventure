<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyPost;

class PostController extends Controller
{
    public function index()
    {
        $data['posts']=MyPost::select(['product_name','product_price','available_stock','item_description','image_name'])->get();
        //dd($data['posts']->toArray());
        return view('myfeed',$data);
    }
}
