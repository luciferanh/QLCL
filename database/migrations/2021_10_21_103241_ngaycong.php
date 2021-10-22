<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ngaycong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngaycongs', function (Blueprint $table) {
            $table->id();
            $table->integer("nv_id");
            $table->integer('thang1');
            $table->integer('thang2');
            $table->integer('thang3');
            $table->integer('thang4');
            $table->integer('thang5');
            $table->integer('thang6');
            $table->integer('thang7');
            $table->integer('thang8');
            $table->integer('thang9');
            $table->integer('thang10');
            $table->integer('thang11');
            $table->integer('thang12');
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
        //
    }
}
