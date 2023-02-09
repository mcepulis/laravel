<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function show(): view {
        return view('auth/login');
    }

    public function authenticate(Request $request) 
    {
        $data = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        // dd($data);
        // dd($request->get('remember'));

        if(Auth::attempt($data, $request->get('remember'))) 
        {
            // dd('VEIKIA');
            $request->session()->regenerate();

            return redirect(route('profile'));
        };


        return back()->withErrors(['email' => 'Invalid data provided']);
    }

    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('categories');
}
}
