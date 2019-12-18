<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nota;
use App\User;

class NoteController extends Controller
{
  public function  all ($id){
    $user = User::find($id);
    if ($user->adm)
    {
      $data = Nota::all();
    } else
    {
      $data = Nota::where('user_id', '=', $id )->get();
    }
      return response ()->json($data);
    }


  }
