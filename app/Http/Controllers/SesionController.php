<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SesionController extends Controller
{
    public function create(){

        return view ('auth.login');
    }
    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o contraseña es incorrecto, por favor intente de nuevo',
            ]);

        } else {

            if(auth()->user()->rol == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/');
            }
        }

        
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}

