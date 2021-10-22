<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToNhanVienProJects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nhan_vien_pro_jects', function (Blueprint $table) {
            //
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nhan_vien_pro_jects', function (Blueprint $table) {
            //
            $table->integer('nang_suat');
            $table->integer('is_quanly');
        });
    }
}
