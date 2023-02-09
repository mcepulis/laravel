<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserController extends Controller
{
    public function show(): View|RedirectResponse
    {
        // if (!Auth::user()) {
        //     return redirect(route('login'));
        // }
        // // dd(Auth::user());
        return view('user/show', ['user' => Auth::user()]);
    }
}
