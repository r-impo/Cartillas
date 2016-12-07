<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller {

    public function sendMsg(Request $req) {
      $msg = $req->input();

      Mail::send('contact.send', ['key' => $msg->Message], function($message) {
        $message->to('contacto.dondeduele@gmail.com', 'Contacto')->subject('Nuevo Contacto');
      });

      return view('adminlte::layouts.landing');
    }
}
