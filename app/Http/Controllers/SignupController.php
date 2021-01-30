<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function signupEmployer(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required|min:2|max:60',
            'surname' => 'required|min:2|max:60',
            'phone' => 'required|min:11|numeric',
            'name_company' => 'required|unique:users|min:2|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'agreements' => 'required',
        ]);

        if ($request->isMethod('post')) {
            $user = new User();
            $user->role = "employer";
            $user->name_company = $request->input('name_company');
            $user->name = $request->input('name');
            $user->surname = $request->input('surname');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            Auth::login($user);

            return response()->json(['status' => 'success']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function signupAgencyEmployer(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required|min:2|max:60',
            'surname' => 'required|min:2|max:60',
            'phone' => 'required|min:11|numeric',
            'name_company' => 'required|unique:users|min:2|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'agreements' => 'required',
        ]);

        if ($request->isMethod('post')) {
            $user = new User();
            $user->role = "agency-employer";
            $user->name_company = $request->input('name_company');
            $user->name = $request->input('name');
            $user->surname = $request->input('surname');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            Auth::login($user);

            return response()->json(['status' => 'success']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function signupUserFirm(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required|min:2|max:60',
            'surname' => 'required|min:2|max:60',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'agreements' => 'required',
        ]);

        if ($request->isMethod('post')) {
            $user = new User();
            $user->role = "user-firm";
            $user->name_company = $request->input('name_company');
            $user->name = $request->input('name');
            $user->surname = $request->input('surname');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            Auth::login($user);

            return response()->json(['status' => 'success']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function signupUser(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required|min:2|max:60',
            'surname' => 'required|min:2|max:60',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'agreements' => 'required',
        ]);

        if ($request->isMethod('post')) {
            $user = new User();
            $user->role = "user";
            $user->name = $request->input('name');
            $user->surname = $request->input('surname');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            Auth::login($user);

            return response()->json(['status' => 'success']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function signupForeigner(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required|min:2|max:60',
            'surname' => 'required|min:2|max:60',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'agreements' => 'required',
        ]);

        if ($request->isMethod('post')) {
            $user = new User();
            $user->role = "foreigner";
            $user->name = $request->input('name');
            $user->surname = $request->input('surname');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            Auth::login($user);

            return response()->json(['status' => 'success']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }
}
