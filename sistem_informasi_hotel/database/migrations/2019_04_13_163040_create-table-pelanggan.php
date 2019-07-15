<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_pelanggan', 4)->unique;
            $table->string('no_identitas', 20)->unique;
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('nama', 30);
            $table->text('alamat');
            $table->string('telp', 15)->unique;
            $table->string('tmpt_lahir', 15);
            $table->date('tgl_lahir');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('pelanggan');
    }
}
