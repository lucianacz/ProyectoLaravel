<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nota;

class NoteController extends Controller
{
  public function  all (){
    $data = Nota::all();
    return response ()->json($data);
  }

}
