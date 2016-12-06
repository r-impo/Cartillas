<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserAvatarController extends Controller
{
    public function update(Request $request) {
        $path = $request->file('avatar')->store('avatars');

        return $path;
    }

    public function get($id) {
      $profile = DB::table('perfils')
        ->where('id', '=', $id)
        ->select('avatar')
        ->get();
      $storePath = '/storage/';
      $avatar = $storePath .intval($profile[0]->avatar) . '.jpg';

      return $avatar;


      //https://www.youtube.com/watch?v=jy2SUxx6uHc
    }
}
