<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswamodel extends Model
{
    protected $table='siswa';
    protected $primaryKey='id';
    public $timestamps=false;
}
