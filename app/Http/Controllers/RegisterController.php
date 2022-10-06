<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function register() {
        return view('register.create');
    }

    public function store() {
        // var_dump(request() -> all());
        $attriutes = request() -> validate([
            'name' => ['required', 'min:6', 'max:255'],
            'username' => ['required', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'max:20', 'min:6']
        ]);

        $user = User::create($attriutes);

        auth() -> login($user);
        session() -> flash('success', 'Your Account has been Created!');
        return redirect('/');
    }
}
