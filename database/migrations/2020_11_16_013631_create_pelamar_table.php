<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_test');
            $table->string('nama');
            $table->string('alamat');
            $table->string('prndidikan_terakhir');
            $table->string('telp');
            $table->string('jp');
            $table->string('agama');
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
        Schema::dropIfExists('pelamar');
    }
}
