<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        dump(Hash::make('heslo'));

        return view('login.login');
    }

    /**
     * Logika pro ošetření přihlášení a hlídání auth pokusů
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function login(Request $request)
    {
        $validatedCredentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        /**
         * attempt hlídá jak počet pokusů, tak také ověřuje dané přihlašovací údaje
         * Sám si řeší hashování obdrženého hesla a porovnání daného hashe s databází
         * Laravel hledá přihlašovací údaje dle toho, co mu je řečeno v config/auth.php
         * Momentáně je to tabulka definovaná v App\Models\User
         */
        if (Auth::attempt($validatedCredentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'password' => 'Neplatný email nebo heslo!',
        ]);
    }

}
