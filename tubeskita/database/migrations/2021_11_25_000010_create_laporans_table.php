<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->longText('description');
            $table->longText('file')->nullable();
            $table->tinyInteger('anonim');
            $table->date('tgl_kejadian');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->foreignId('laporan_type_id');
            $table->foreignId('status_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('laporan_type_id')->references('id')->on('set_libraries')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('set_libraries')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('set_libraries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
