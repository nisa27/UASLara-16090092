<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipeKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_kamar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipe_kamar', 20);
            $table->timestamps();
        });

        //set FK di kolom id_kelas di tabel siswa
        Schema::table('kamar', function (Blueprint $table){
            $table->foreign('id_tipekamar')
                  ->references('id')
                  ->on('tipe_kamar')
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
         Schema::table('kamar', function (Blueprint $table){
            $table->dropForeign('kamar_id_tipekamar_foreign');
        });
        Schema::dropIfExists('tipe_kamar');
    }
}
