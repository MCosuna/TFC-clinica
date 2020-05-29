<?php

namespace App\Http\Controllers;

use App\Estetica;
use Illuminate\Http\Request;

class EsteticaController extends Controller
{
    public function store(Request $request){

        $this->validate($request, [
            'description' => 'required',
            'title' => 'required',
            'shortdescription' => 'required',
            'email' => 'required',
        ]); 

        $create = Estetica::create($request->post());        
        return response()->json($request);
 
     }


        public function home(){
            return view('App');
        }

        public function index(){
            
        }
    
}
