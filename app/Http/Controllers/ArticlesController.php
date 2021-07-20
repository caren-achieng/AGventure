<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index()
    {
        $data['articles']=Articles::select(['title','content'])->get();
        //dd($data['posts']->toArray());
        return view('articles',$data);
    }
}
