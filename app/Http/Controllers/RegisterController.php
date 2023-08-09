<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    // Ruta para vista registro de usuarios
    public function index()
    {
        return view('autentication.login_user');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        // Validaciones del formulario de registro para esto se utilizan los "name" de los campos del formulario
        $this->validate($request, [
            'name' => 'required|min:5',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required', //confirmed hace que se tenga que confirmar la contraseña de nuevo

        ]);


        // Invocar el modelo User para crear el registro
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        // Redireccionando
        return redirect()->route('user-preferences.create');
    }
}
