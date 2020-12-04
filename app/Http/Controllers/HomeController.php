<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Category;
use App\Post;


class HomeController extends Controller {

    public function index() {
        $posts = DB::table('posts')
                        ->where('active', true)
                        ->latest()
                        ->limit(3)
                        ->get();

        $categories = Category::all();

        return view('home', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function artigo(Request $request) {
        $posts = DB::table('posts')
                        ->where('active', true)
                        ->latest()
                        ->limit(3)
                        ->get();

        $categories = Category::all();

        $id = $request->input('id');

        return view('artigo', [
            'posts' => $posts,
            'categories' => $categories,
            'id' => $id
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
