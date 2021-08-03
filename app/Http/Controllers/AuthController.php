<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json'
        ])->post(env('WALLET_BASE_URL') . 'login', [
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($response->object()->user && $response->object()->access_token) {
            $token = $response->object()->access_token;
            $user = $response->object()->user;

            session(['access_token'=> $token]);
            session(['user'=> $user]);


            return redirect()->route('dashboard');
        } else if ($response->object()->status && $response->object()->status == 'error') {
            return redirect()->back()->with(['error' => $response->object()->message]);
        }
    }

    public function logout(Request $request)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.session('access_token')
        ])->post(env('WALLET_BASE_URL') . 'logout');
        session()->forget(['user', 'access_token']);
        session()->flush();
        return redirect()->route('login');
    }
}
