<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Validator;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller {

    public function index() {
        $users = User::all();

        $categories = Category::all();

        return view('users', [
            'users' => $users
        ]);
    }

}