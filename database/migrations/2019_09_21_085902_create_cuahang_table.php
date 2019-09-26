<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuahangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuahang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten');
            $table->string('diachi');
            $table->integer('sodienthoai');
            $table->date('thoi gian lam viec');
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
        Schema::dropIfExists('cuahang');
    }
}
