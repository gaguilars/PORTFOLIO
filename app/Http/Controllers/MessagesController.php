<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {   
        request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required|min:3',
        ]);

        Mail::to('guillermo.aguilarsanchez@gmail.com')->send(new MessageReceived);
        //return 'Mensaje Enviado';
        return view('emails.message-received');
    }

   
}
