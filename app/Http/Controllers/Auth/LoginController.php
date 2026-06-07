<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Exceptions\InvalidCredentialsException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        try {
            if (!Auth::attempt($credentials)) {            
                throw new InvalidCredentialsException("Credenciales incorrectas, por favor, intenta de nuevo.", 401);
            }

            $request->session()->regenerate();

            return redirect()->route('reparaciones.index');
        } catch (InvalidCredentialsException $e) {
            return back()
                ->withErrors(['login' => $e->getMessage()])
                ->onlyInput('email');
        } catch (Exception $e) {
            return back()
                ->withErrors(['login' => 'Ocurrio un error inesperado, por favor intenta mas tarde.']);
        }
    }

    public function logout(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }

}
