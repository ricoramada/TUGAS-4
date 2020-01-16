<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\petugas::insert([
          [
            'nama_petugas'=>'facri',
            'alamat'=>'jl ahmad salleh',
            'nomer_telepon'=>'09128391728317',
            'username'=>'rico',
            'password'=>'29823',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'nama_petugas'=>'zaqi',
            'alamat'=>'jl ahmad salleh',
            'nomer_telepon'=>'09128391728317',
            'username'=>'zagi',
            'password'=>'29823',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'nama_petugas'=>'rafi',
            'alamat'=>'jl ahmad solleh',
            'nomer_telepon'=>'09128391728317',
            'username'=>'rafiahmad',
            'password'=>'29823',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'nama_petugas'=>'rafly',
            'alamat'=>'jl ahmad sulleh',
            'nomer_telepon'=>'09128391728317',
            'username'=>'rafly',
            'password'=>'29823',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'nama_petugas'=>'fahmi',
            'alamat'=>'jl ahmad salloh',
            'nomer_telepon'=>'09128391728317',
            'username'=>'fahmi',
            'password'=>'29823',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ]
        ]);
    }
}
