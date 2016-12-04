<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function getUsers(Request $request) {
      var_dump($request);
      $users = DB::table('users')->where('name', 'like', $request)->value('name');

      return $users;
    }

}
