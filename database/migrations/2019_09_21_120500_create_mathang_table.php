<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mathang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten');
            $table->string('mota');
            $table->integer('gia');
            $table->integer('soluong');
            $table->string('kho');
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
        Schema::dropIfExists('mathang');
    }
}
