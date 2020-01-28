<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota;
use Validator;
use Auth;

class anggotacontroller extends Controller
{
    public function cek()
    {
        if(Auth::user()->levels=='admin'){
            $dt_anggota=anggota::get();
            return response()->json($dt_anggota);
        }else{
            return response()->json(['status'=>'anda bukan admin']);
        }
    }
    public function store(Request $req)
    {
      if (Auth::user()->levels=='admin') {
      $valid=Validator::make($req->all(),
        [
            'nama_anggota'=>'required',
            'alamat'=>'required',
            'nomer_telepon'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]
      );
      if($valid->fails()){
        return Response()->json($valid->errors());
      }
      $save=anggota::create([
        'nama_anggota'=>$req->nama_anggota,
        'alamat'=>$req->alamat,
        'nomer_telepon'=>$req->nomer_telepon,
        'username'=>$req->username,
        'password'=>$req->password
      ]);
      if($save){
        return Response()->json(['Berhasil Di Tambahkan']);
      }else {
        return Response()->json(['Gagal Di Tambahkan']);
      }
    }
  }
    public function update($id,Request $req)
    {
      if (Auth::user()->levels=='admin') {
      $valid=Validator::make($req->all(),
        [
            'nama_anggota'=>'required',
            'alamat'=>'required',
            'nomer_telepon'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]
      );
      if($valid->fails()){
        return Response()->json($valid->errors());
      }
      $ubah=anggota::where('id',$id)->update([
        'nama_anggota'=>$req->nama_anggota,
        'alamat'=>$req->alamat,
        'nomer_telepon'=>$req->nomer_telepon,
        'username'=>$req->username,
        'password'=>$req->password
      ]);
      if($ubah){
        return Response()->json(['Berhasil Di Update']);
      }else {
        return Response()->json(['Gagal Di Update']);
      }
    }
  }
    public function delete($id)
    {
      if (Auth::user()->level=='admin') {
      $hapus=anggota::where('id',$id)->delete();
      if($hapus){
        return Response()->json(['Telah dihapus']);
      }else{
        return Response()->json(['Gagal dihapus']);
      }
    }
  }
    public function tampil()
    {
      if (Auth::user()->levels=='admin') {
      $data=anggota::all();
      $hitung=anggota::count();
      return Response()->json(['Jumlah'=>$hitung],['Data'=>$data]);
    }
  }
}
