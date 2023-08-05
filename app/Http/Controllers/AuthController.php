<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use Carbon\Carbon;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['signin','register']]);
    }

    public function signin_view()
    {
        return view('signin');
    }

    public function signup_view()
    {
        return view('signup');
    }

    public function sign_in(Request $request)
    { 
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        $token = Auth::attempt($credentials);
        if (!$token) {
            return redirect()->back()->with('fail', 'Email atau Password Salah.');
        }

        $user = Auth::user();

        // Store Token to Session
        session()->put('x-token', $token);

        return redirect()->route('home');
    }

    public function sign_up(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = Auth::login($user);

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        // Destroy Token Session
        $token = session()->get('token', '');

        // Check Cart Session
        if(isset($token)) {
            unset($token);
            session()->put('token', '');
        }

        return view('signin');
    }
}
