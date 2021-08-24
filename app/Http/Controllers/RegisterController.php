<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store()
    {
//        return request()->all();
        $attributes = request()->validate([
            'email' => ['required', /* Rule::unique('users', 'email'),*/ 'email', 'max:255'],
            'password' => ['required', 'min:7', 'max:20']
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        return redirect('blog');
    }


}
