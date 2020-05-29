<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ClinicaMail;
use Illuminate\Support\Facades\Mail;
// use Session;

class MailController extends Controller
{
      

//         public function store(){  
//        request->validate([
//             'dni' => 'required',
//             'name' => 'required',
//             'lname' => 'required',
//             'phone' => 'required',
//             'email' => 'required',
//             'message'=> 'required'
//         ]);
    

//  }
  public function mail($email)
     {
       

      // $email = 'cita almacenada';
       Mail::to('osunaojeda@gmail.com')->send(new ClinicaMail($email));
       
    }

}
