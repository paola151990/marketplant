<?php

namespace App\Http\Controllers;

use App\Models\Tipo_identificacion;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){

 $tipo = Tipo_identificacion::all();
        return view ('auth.register',compact('tipo'));
    }
    
    public function store(Request $request) {

        
        $user  = new User();

      
        $user->name = $request->name;
        $user->tipo_identificacion_id = $request->tipo_identificacion_id;
        $user->identificacion = $request->identificacion;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
       
    
        auth()->login($user);
        return redirect()->to('/');

    }

}

