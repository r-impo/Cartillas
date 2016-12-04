<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function getAllUsers($q) {
      $users = DB::table('users')->where('name', 'like', "%$q%")->pluck('name');

      return $users;
    }

}
