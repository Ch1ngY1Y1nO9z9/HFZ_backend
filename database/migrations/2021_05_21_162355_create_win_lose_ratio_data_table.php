<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinLoseRatioDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('win_lose_ratio_data', function (Blueprint $table) {
            $table->id();
            $table->string('wrestler_id');
            $table->string('single_total');
            $table->string('single_win');
            $table->string('tag_total');
            $table->string('tag_win');
            $table->string('specailEvent_total');
            $table->string('specailEvent_win');
            $table->string('draw');
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
        Schema::dropIfExists('win_lose_ratio_data');
    }
}
