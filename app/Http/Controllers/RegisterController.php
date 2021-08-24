<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store()
    {
        return request()->all();
//        request()->validate([
//            'email' => ['required', 'email', 'max:255'],
//            'password' => ['required', 'min:7', 'max:20']
//        ]);
//
//        return redirect('blog');
    }


}
