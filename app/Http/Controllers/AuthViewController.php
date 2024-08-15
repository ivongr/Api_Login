<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthViewController extends Controller
{
    //Vista de Inicio
    public function showLoginForm()
    {
        return view('auth.login');
    }

    //Vista Formulario Registró
    public function showRegisterForm()
    {
        return view('auth.register');
    }


    // Vista de Bienvenida
    public function showWelcomePage()
    {

        return view('auth.welcome');
    }

    //Vista Cerrar sesión
    public function showLogoutPage()
    {
        return view('auth.logout');
    }
}
