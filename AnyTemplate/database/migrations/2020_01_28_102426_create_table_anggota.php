<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_anggota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_anggota',200);
            $table->string('alamat',100);
            $table->integer('nomer_telepon');
            $table->string('username',200);
            $table->string('password',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_anggota');
    }
}
