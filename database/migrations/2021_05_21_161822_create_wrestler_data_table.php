<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWrestlerDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wrestler_data', function (Blueprint $table) {
            $table->id();
            $table->string('wrestler_id');
            $table->string('birth_day');
            $table->string('debut');
            $table->string('weight');
            $table->string('fan_name');
            $table->string('signature');
            $table->string('finisher');
            $table->string('tag_with');
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
        Schema::dropIfExists('wrestler_data');
    }
}
