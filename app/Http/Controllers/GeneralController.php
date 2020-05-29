<?php

namespace App\Http\Controllers;
use App\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function store(Request $request){
        // Session::flash('name', $name);

        $this->validate($request, [
            'description' => 'required',
            'title' => 'required',
            'shortdescription' => 'required',
            'email' => 'required',
        ]); 

        $create = General::create($request->post());        
        return response()->json($request);
 
     }


        public function home(){
            return view('App');
        }

        public function index(){
            
        }
    
}
