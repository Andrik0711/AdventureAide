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
        
        

        // Autenticar un usuario con el método "attemp"
        
            // Opcion 1
            // auth()->attempt([
            //     'email'=>$request->email,
            //     'password' => $request->password,
            // ]);

            // Opcion 2
            // auth()->attempt($request->only('email','password'));

        // Redireccionando
        return redirect()->route('login');
    }
}
