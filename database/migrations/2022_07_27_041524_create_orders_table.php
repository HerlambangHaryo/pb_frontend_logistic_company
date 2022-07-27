<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); 
            $table->string('no_job')->nullable();

            $table->string('nama_pengirim')->nullable();
            $table->string('alamat_pengirim')->nullable();
            $table->string('provinsi_pengirim')->nullable();
            $table->string('kota_pengirim')->nullable();
            $table->string('kecamatan_pengirim')->nullable();
            $table->string('kelurahan_pengirim')->nullable();
            $table->string('telepon_pengirim')->nullable();
            
            $table->string('latitude_pengirim')->nullable();
            $table->string('longitude_pengirim')->nullable();

            $table->string('nama_penerima')->nullable();
            $table->string('alamat_penerima')->nullable();
            $table->string('provinsi_penerima')->nullable();
            $table->string('kota_penerima')->nullable();
            $table->string('kecamatan_penerima')->nullable();
            $table->string('kelurahan_penerima')->nullable();
            $table->string('telepon_penerima')->nullable();
            
            $table->string('latitude_penerima')->nullable();
            $table->string('longitude_penerima')->nullable();

            $table->tinyInteger('is_asuransi')->default(0);
            

            $table->foreignId('user_id');
            $table->foreignId('admin_id')->nullable();
            $table->tinyInteger('is_approval')->default(0);

            $table->integer('total_biaya')->nullable();

            $table->tinyInteger('is_sampai')->default(0);
            $table->tinyInteger('is_diterima')->default(0);

            
            $table->date('tanggal_approval')->nullable(); 
            $table->date('tanggal_sampai')->nullable(); 
            $table->date('tanggal_diterima')->nullable();
            

            
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
        Schema::dropIfExists('orders');
    }
}
