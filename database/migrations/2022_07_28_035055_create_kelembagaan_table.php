<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelembagaanTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelembagaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desa');
            $table->string('bpd');
            $table->string('lkd');
            $table->string('pkk');
            $table->string('rt');
            $table->string('rw');
            $table->string('posyandu');
            $table->string('karangtaruna');
            $table->string('bumdes');
            $table->string('lpm');
            $table->text('keterangan');
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
        Schema::drop('kelembagaan');
    }
}
