<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\buku::insert([
          [
            'judul'=>'si maling',
            'penerbit'=>'rafly',
            'pengarang'=>'mbak lilis',
            'foto'=>'-',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'judul'=>'si kancil',
            'penerbit'=>'dany',
            'pengarang'=>'mbak kikik',
            'foto'=>'-',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'judul'=>'mati di alam kubur',
            'penerbit'=>'danny',
            'pengarang'=>'mbak lulu',
            'foto'=>'-',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'judul'=>'si mamang',
            'penerbit'=>'igor',
            'pengarang'=>'ken',
            'foto'=>'-',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'judul'=>'cerita saya',
            'penerbit'=>'ken',
            'pengarang'=>'rafly',
            'foto'=>'-',
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
          ]
        ]);
    }
}
