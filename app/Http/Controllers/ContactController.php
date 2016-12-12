<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller {

    public function sendMsg(Request $req) {
      $msg = $req->input('Message');

      Mail::send('contact.send', ['key' => $msg], function($message) {
        $message->to('contacto.dondeduele@gmail.com', 'Contacto')->subject('Nuevo Contacto');
      });

      return view('adminlte::layouts.landing');
    }
}
