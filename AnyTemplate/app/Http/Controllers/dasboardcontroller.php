<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak;
class dasboardcontroller extends Controller
{
    public function _construct(){
      $this->middleware('cek_login');
    }
    public function index(){
      return view('sukses.dasboard');
    }
}
