<?php

namespace App\Http\Controllers;
use App\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message'=> 'required'
        ]); 
        $create = Contacto::create($request->all());        
        return response()->json($request);
 
     }


        public function home(){
            return view('App');
        }

        public function index(){
            
        }

}





