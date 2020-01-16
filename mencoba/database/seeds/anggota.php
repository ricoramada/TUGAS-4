<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\anggota::insert([
        [
          'nama_anggota'=>'rafly',
          'alamat'=>'jl diponegoro',
          'nomer_telepon'=>'0812323342342',
          'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ],
        [
          'nama_anggota'=>'dany',
          'alamat'=>'jl turen',
          'nomer_telepon'=>'081232334242',
          'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ],
        [
          'nama_anggota'=>'igor',
          'alamat'=>'jl ngembul',
          'nomer_telepon'=>'08123233423423',
          'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ],
        [
          'nama_anggota'=>'alvin',
          'alamat'=>'jl tambingan',
          'nomer_telepon'=>'0812323342341',
          'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ],
        [
          'nama_anggota'=>'rico',
          'alamat'=>'jl durian',
          'nomer_telepon'=>'08123233426765',
          'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ]
      ]);
    }
}
