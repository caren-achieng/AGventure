<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable {
        $data['farmers'] = User::where('is_admin', true)->latest('id')->paginate(5);

        return view('home', $data);
    }
}
