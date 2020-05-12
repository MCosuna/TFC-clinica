<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Cliente;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClinicaMail;


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
         

        
        return response()->json($request);
 
     //    Cliente::create($request->all());
     //    return ;
     // $cliente = Cliente::create($request->all());
     // return response()->json(['cliente'=>$cliente]);
    //  return ['message' => 'He recibido datos'];
    //  return response()->json(['cliente'=>$request->all()]);
     }

    public function send(Request $request){
       $contenido = $request->validate( [
            'dni' => 'required',
            'name' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message'=> 'required'
        ]);  
        //he puesto mi email para probar el envio 
         return response()->json(['EMAIL' => 'EMAIL ENVIADO CON EXITO']);
         Mail::to('osunaojeda@gmail.com')->send(new ClinicaMail($contenido));
    }





        public function home(){
            return view('App');
        }

        public function index(){
            
        }



}
