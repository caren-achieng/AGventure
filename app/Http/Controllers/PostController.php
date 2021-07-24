<?php

namespace App\Http\Controllers;

use App\Models\User;

class PostController extends Controller {
    public function index($id) {
        $data['farmer'] = User::with(['posts', 'articles'])->find($id);

        return view('posts',$data);
    }
}
