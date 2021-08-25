<?php

namespace App\Http\Controllers;

use App\Models\NewUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function blog()
    {
        $users = NewUser::get();
        dd($users);

        return view('blog');
    }

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

