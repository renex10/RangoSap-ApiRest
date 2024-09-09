<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    //1)recibir la informacion que se ENVIA DESDE LA PETISION
        //2 objeto request estara todos los parametros de dicha petision
    public function store(Request $request){
        //3 validando los datos que se nos envia
        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|string|email|max:225|unique:users',
            'password' => 'required|string|min:8|confirmed',
          ]);

          User::create(
            //4) pasar la informacion que se esta mandando desde la peticion, lo rescatamos con 
            //el objeto $request
            //almacena la info: 
            $user = $request->all());
            //se retorna al client la informacion
            return response($user, 200);
          

    }
}
