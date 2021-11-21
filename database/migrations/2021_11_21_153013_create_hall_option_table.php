<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hall_option', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hall_id');
            $table->unsignedBigInteger('option_id');
            $table->timestamps();

            $table->foreign('hall_id')
                ->references('id')
                ->on('halls');

            $table->foreign('option_id')
                ->references('id')
                ->on('options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hall_option');
    }
}
