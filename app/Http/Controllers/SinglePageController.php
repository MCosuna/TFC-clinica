<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    //
    public function index() {
        return view('app');
    }

    public function store(Request $request){
       $this->validate($request, [
           'dni' => 'required',
           'name' => 'required',
           'lname' => 'required',
           'phone' => 'required',
           'email' => 'required',
           'message'=> 'required'
       ]); 

    //    Cliente::create($request->all());
    //    return ;
    $cliente = Cliente::create($request->all());
    return response()->json(['cliente'=>$cliente]);
    // return response()->json(['cliente'=>$request->all()]);
    }
}
