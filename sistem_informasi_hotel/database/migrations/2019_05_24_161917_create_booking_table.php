<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kamar')->unsigned();
            $table->string('kode_booking', 10)->unique;
            $table->string('nama');
            $table->string('no_hp', 13)->unique;
            $table->text('alamat');
            $table->date('check_in');
            $table->date('check_out');
            $table->enum('status', ['enable', 'disabled']);
            $table->enum('deleted', ['1', '0']);
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
        Schema::dropIfExists('booking');
    }
}
