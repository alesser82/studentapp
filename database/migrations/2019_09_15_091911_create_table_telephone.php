<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTelephone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephone', function (Blueprint $table) {
            $table->integer('id_siswa')->unsigned()->primary('id_siswa');
            $table->string('nomor_telepon')->unique();
            $table->timestamps();
        });

        Schema::table('telephone', function (Blueprint $table)
        {
            $table->foreign('id_siswa')
                    ->references('id')->on('student')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telephone');
    }
}
