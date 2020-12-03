<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Question;


class HomeController extends Controller {

    public function index() {
        $categories = Category::all();

        return view('home', [
            'categories' => $categories
        ]);
    }

    public function artigo() {
        $categories = Category::all();

        return view('artigo', [
            'categories' => $categories
        ]);
    }

    public function categoria() {
        $categories = Category::all();

        return view('categoria', [
            'categories' => $categories
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
