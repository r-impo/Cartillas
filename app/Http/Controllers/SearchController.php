<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function getAllUsers($q) {
      $users = DB::table('users')->where('name', 'like', "%$q%")->pluck('name')->take(6);
      $especialidad = DB::table('perfils')->where('especialidad', 'like', "%$q%")->pluck('especialidad')->take(2)->unique();

      $resultados = ['users' => $users, 'especialidad' => $especialidad];

      return $users;
    }

}
