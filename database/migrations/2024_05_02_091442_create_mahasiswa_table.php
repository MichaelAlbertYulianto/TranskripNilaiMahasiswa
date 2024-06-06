<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_529', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NIM', 255);
            $table->string('Nama',255);
            $table->string('Alamat',255);
            $table->decimal('IPK', 4, 2)->unsigned()->check(function ($column) {
                return $column->where('IPK', '>=', 0)->where('IPK', '<=', 4);
            });
            $table->string('foto', 255);
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
        Schema::dropIfExists('mahasiswa');
    }
}
