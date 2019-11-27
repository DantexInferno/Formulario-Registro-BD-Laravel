<?php

namespace App\Http\Controllers;
use App\Login;
use Illuminate\Http\Request;

class formularioController extends Controller
{
    
    public function store(Request $request){
        request()->validate([

            "nombres" => 'required',
            "apellidos" => 'required',
            "telefono" => 'required',
            "correo" => 'required',
            "password" => 'required',
            "confirmpass" => 'required'
        ]);

        $login=new Login();

        $login->nombres=$request->nombres;
        $login->apellidos=$request->apellidos;
        $login->telefono=$request->telefono;
        $login->correo=$request->correo;
        $login->password=$request->password;
        $login->confirmpass=$request->confirmpass;
        if ($login->confirmpass==$request->password) {
            $login->save();
            return view('menu');
        }else{
            return view("login");
        }
        

        

        
    }


    public function create()
    {
        


    }

}
