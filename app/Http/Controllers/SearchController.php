<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function getAllUsers($q) {
      $users = DB::table('users')
        ->join('perfils', 'users.id', 'perfils.user_id')
        ->where('name', 'like', "%$q%")
        ->orWhere('especialidad', 'like', "%$q%")
        ->limit(6)
        ->get();

      return $users;
    }

}
