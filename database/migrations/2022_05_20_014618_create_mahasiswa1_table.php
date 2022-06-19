<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswa1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('nim');
            $table->string('nama', 30);
            $table->string('gender', 30);
            $table->string('jurusan', 30);
            $table->string('bidang_minat', 50);

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
        Schema::dropIfExists('mahasiswa1');
    }
}
