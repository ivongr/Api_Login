<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Registrar usuario
    public function register(Request $request)
    {
        //hacer una petición
        $datos = $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($datos); //

        //crear el token con el nombre
        $token = $user->createToken($request->nombre);

        return [
            'user' => $user,
            //devolverlo sin formato
            'token' => $token->plainTextToken
        ];
    }

    //Iniciar sesión
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Credenciales incorrectas'
            ], 401); // 401 Unauthorized
        }

        $token = $user->createToken($user->nombre)->plainTextToken;

        // Retornar el mensaje de bienvenida en la respuesta JSON
        return response()->json([
            'redirect' => route('home.form'),
            'message' => '¡Bienvenido!',
            'token' => $token,
            'user_name' => $user->nombre // Agrega el nombre del usuario aquí si lo necesitas
        ]);
    }

    //cerrar sesión
    public function logout(Request $request)
    {
        //cuando se cierra sesión eliminar ese token por usuario
        $request->user()->tokens()->delete();
        return [
            'message' => 'Sesión terminada'
        ];
    }

    public function index()
    {
        //DEVOLVER TODAS LOS USUARIOS DE LA API

        return User::all();
    }

    public function show(User $user)
    {
        //devolver la info de los usuarios
        return $user;
    }
}
