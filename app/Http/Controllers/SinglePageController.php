<?php

namespace App\Http\Controllers;
use App\Cliente;
use App\Mail\ClinicaMail;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function index() {
        return view('app');
    }


    
}
