<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_hotel', function (Blueprint $table) {
            //create table fasilitas_hotel
            $table->integer('id_kamar')->unsigned()->index();
            $table->integer('id_fasilitas')->unsigned()->index();
            $table->timestamps();
            //set PK
            $table->primary(['id_kamar', 'id_fasilitas']);

            //set FK fasilitas_hotel ---Kamar
            $table->foreign('id_kamar')
                ->references('id')
                ->on('kamar')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //set FK fasilitas_hotel --- Fasilitas
             $table->foreign('id_fasilitas')
                ->references('id')
                ->on('fasilitas')
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
        Schema::dropIfExists('fasilitas_hotel');
    }
}
