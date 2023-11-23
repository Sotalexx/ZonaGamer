<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Maneja el registro de un nuevo usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'edad' => 'required|integer',
            'genero' => 'required',
            'fotografia' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Permite imágenes, pero es opcional
            'correo' => 'required|email|unique:users,email',
            'contraseña' => 'required|min:8',
            'usuario' => 'required|unique:users,username',
            'pais' => 'required',
            'direccion' => 'required',
        ]);

        // Crear el usuario
        $user = new User();
        $user->name = $validatedData['nombre'];
        $user->email = $validatedData['correo'];
        $user->password = Hash::make($validatedData['contraseña']);
        $user->username = $validatedData['usuario'];
        $user->age = $validatedData['edad']; 
        $user->gender = $validatedData['genero']; 
        $user->country = $validatedData['pais']; 
        $user->address = $validatedData['direccion']; 

        // Guardar el usuario
        $user->save();

        // Manejar la subida de la fotografía
        if ($request->hasFile('fotografia')) {
            $path = $request->file('fotografia')->store('public/fotos');
            // Guardar la ruta de la foto en el usuario
            $user->foto = $path;
            $user->save();
        }

        // Redirige al login
        return redirect()->route('login')->with('success', 'Registro completado con éxito.');
    }
}
