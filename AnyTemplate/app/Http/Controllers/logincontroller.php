<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak;
use Session;

class logincontroller extends Controller
{
    public function _construct(){
      $this->middleware('cek_login');
    }
    public function index(){
      return view('login.login');
    }
    public function cek(Request $request){
      $this->validate($request,[
        'username' => 'required',
        'password' => 'required',
      ]);
      $proses=kontak::where('username',$request->username)->where('password',md5($request->password));
      if($proses->count()>0){
        $data = $proses->first();
        Session::put('id_kontak',$data->id_kontak);
        Session::put('username',$data->username);
        Session::put('password',$data->password);
        Session::put('nama',$data->nama);
        Session::put('status',$data->status);
        Session::put('login_status',true);
        return redirect('dasboard');
      }else{
        Session::flash('alert_pesan','Username dan Password Tidak cocok');
        return redirect('login');
      }
    }
    public function logout(){
      Session::flush();
      return redirect('/');
    }
}
