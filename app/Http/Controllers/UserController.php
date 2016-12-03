<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller {
  public function getLogin() {
    return view('auth/login');
  }

  public function getRegister() {
    return view('auth/register');
  }

  public function logout() {
    Auth()->logout();

    return view('home');
  }

  public function getMenu() {
    return view('PanelAdmin/index');
  }

  public function updateUser(Request $request) {
    
    return view('PanelAdmin/index');
  }
}
