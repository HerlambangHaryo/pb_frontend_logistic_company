<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailorders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('nama');
            $table->double('panjang');
            $table->double('lebar');
            $table->double('tinggi');
            $table->double('berat');
            $table->integer('jumlah');
            $table->integer('total_berat');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailorders');
    }
}
