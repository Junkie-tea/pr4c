<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegController extends Controller
{
    public function create_user (Request $request) {
        $validated = $request->validate([
            'password' => 'required|min:4',
            'email' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user = User::where('email', $request->email)->first();
        Auth::login($user, $remember = true);

        return redirect(route('story.log'));
    }
}
