<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $validator = $this->validate($request, [
            'email' => 'required|max:255',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only(['email', 'password']), $request->only(['remember']))) {
            return response()->json(['status' => 'success']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
