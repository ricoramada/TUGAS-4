<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;
use Validator;
use Auth;

class bukucontroller extends Controller
{
  public function cek()
  {
      if(Auth::user()->levels=='admin'){
          $dt_buku=buku::get();
          return response()->json($dt_buku);
      }else{
          return response()->json(['status'=>'anda bukan admin']);
      }
  }
  public function store(Request $req)
  {
    if (Auth::user()->levels=='admin') {
      // code...
    $valid=Validator::make($req->all(),
      [
        'judul'=>'required',
        'penerbit'=>'required',
        'pengarang'=>'required'
      ]
    );
    if($valid->fails()){
      return Response()->json($valid->errors());
    }
    $save=buku::create([
      'judul'=>$req->judul,
      'penerbit'=>$req->penerbit,
      'pengarang'=>$req->pengarang
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
      // code...
    $valid=Validator::make($req->all(),
      [
          'judul'=>'required',
          'penerbit'=>'required',
          'pengarang'=>'required'
      ]
    );
    if($valid->fails()){
      return Response()->json($valid->errors());
    }
    $ubah=buku::where('id',$id)->update([
      'judul'=>$req->judul,
      'penerbit'=>$req->penerbit,
      'pengarang'=>$req->pengarang
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
    if (Auth::user()->levels=='admin') {
      // code...
    $hapus=buku::where('id',$id)->delete();
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
      // code...
    $data=buku::all();
    $hitung=buku::count();
    return Response()->json(['Jumlah'=>$hitung],['Data'=>$data]);
    }
  }
}
