<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index() {
        //->with('articles',Articles::orderBy('updated_at','DESC')->get());
    }

    public function create(Request $req): RedirectResponse {
        $data = $req->only('title', 'content');

        Article::create($data);

        return redirect()->route('articles');
    }

}
