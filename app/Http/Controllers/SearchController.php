<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function getSearchUsers($q) {
      $users = DB::table('users')
        ->join('perfils', 'users.id', 'perfils.user_id')
        ->where('name', 'like', "%$q%")
        ->orWhere('localidad', 'like', "%$q%")
        ->limit(6)
        ->get();

      return $users;
    }

    public function getAllUsers($q) {
      $users = DB::table('users')
        ->join('perfils', 'users.id', 'perfils.user_id')
        ->where('name', 'like', "%$q%")
        ->orWhere('localidad', 'like', "%$q%")
        ->get();

      return view('adminlte::layouts.medicos', [
        'users' => $users
      ]);
    }

    public function getUser($q) {
      $user = DB::table('users')
        ->join('perfils', 'users.id', 'perfils.user_id')
        ->find($q)
        ->get();

        return view('adminlte::layouts.medico', [
          'user' => $user
        ]);
    }

}
