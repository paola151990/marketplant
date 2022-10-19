<?php

namespace App\Http\Controllers;

use App\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::paginate(5);
        return view ('users.index', compact('users'));

    }

    public function create()
    {  

        $roles = Role::all()->plunck('nombre', 'id')
         return view('users.create', compact('roles'));


    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create($request-> only ('name','username','email') );
    }


}