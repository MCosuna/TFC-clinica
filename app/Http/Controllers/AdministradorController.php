<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //Controlador de Administrador
    public function login(Request $request){
        $name = 'admin';
        $pass = 'admin';
        if($request->input('name')== $name && $request->input('pass') == $pass){
            $res = array (
                'log' => '1'
            );
        }else{
            $res = array(
                'log' => '0'
            );
        }
        return response()->json($res, 200);
    }
}
