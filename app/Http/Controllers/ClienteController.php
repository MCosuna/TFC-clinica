<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'dni' => 'required',
            'name' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message'=> 'required'
        ]); 
        $create = Cliente::create($request->all());
        return response()->json(['status' => 'success' , 'msg'=>'cita creada con exito']);
 
     //    Cliente::create($request->all());
     //    return ;
     // $cliente = Cliente::create($request->all());
     // return response()->json(['cliente'=>$cliente]);
    //  return ['message' => 'He recibido datos'];
    //  return response()->json(['cliente'=>$request->all()]);
     }

        public function home(){
            return view('App');
        }

        public function index(){
            
        }

}
