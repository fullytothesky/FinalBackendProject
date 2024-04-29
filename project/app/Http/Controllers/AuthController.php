<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

//class AuthController extends Controller
//{
//
//
//    public function login()
//    {
//        validator(request()->all(), [
//
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//
//        ])->validate();
//
//        //аутентифікація користувача
//        if (auth()->attempt(request()->only(['email', 'password']))) {
//            return redirect('/orders');
//        } else {
//            return redirect()->back()->withErrors(['email' => 'Invalid Email or Password']);
//        }
//
//    }
//
//    public function logout()
//    {
//        //auth helper will remove the current user id from session using logout
//        auth()->logout();
//
//        return (redirect('/'));
//    }
//
//
//    public function registrationView()
//    {
//        return view('registration');
//    }
//
//    public function registrationStore(Request $request)
//    {
//
//        try {
//            validator(request()->all(), [
//                'name' => ['required', 'string', 'max:50'],
//                'email' => ['required', 'string', 'email', 'unique:users'],
//                'password' => ['required', 'string', 'min:8',],
//                'email_verified_at' => now(),
//
//
//            ])->validate();
//
//
//            $user=User::create([
//                'name' => $request->name,
//                'email' => $request->email,
//                'password' => Hash::make($request->password)]);
//
//            Auth::login($user);
//
//            return redirect('/');
//
//
//
//        } catch (ValidationException $e) {
//            return redirect()->back()->withErrors($e->validator->errors());
//        }
//
//    }
//}



class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($request->only(['email', 'password']))) {
                return response()->json(['message' => 'Logged in successfully'], 200);
            } else {
                return response()->json(['error' => 'Invalid Email or Password'], 401);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function logout()
    {
        try {
            auth()->logout();
            return response()->json(['message' => 'Logged out successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function registrationStore(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:50'],
                'email' => ['required', 'string', 'email', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'email_verified_at' => now(),
            ]);

            Auth::login($user);

            return response()->json(['message' => 'User registered successfully'], 201);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->validator->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

