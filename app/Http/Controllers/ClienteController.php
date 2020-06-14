<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Cliente;
use Illuminate\Support\Facades\Mail;
// use Session;
// use App\Mail\ClinicaMail;


class ClienteController extends Controller
{
    public function store(Request $request)
    {

        $this->validate($request, [
            'dni' => 'required',
            'name' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $create = Cliente::create($request->all());
        return response()->json($request);
    }



    public function home()
    {
        return view('App');
    }

    public function getCitas()
    {
        return Cliente::all();
    }

    public function destroy(Request $request)
    {
        $dni = $request->get('dni');

        Cliente::where('dni', '=', $dni);
    }


}
