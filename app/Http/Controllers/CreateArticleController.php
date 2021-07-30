<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class CreateArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function one()
    {

        //->with('articles',Articles::orderBy('updated_at','DESC')->get());
    }


        public function create(Request $req){
            $data=$req->only('title','content');
            Article::create($data);
            // dd($data);
           return redirect()->route('articles');
        }

}
