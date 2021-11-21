<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_option', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_id');
            $table->unsignedBigInteger('option_id');
            $table->timestamps();

            $table->foreign('offer_id')
            ->references('id')
            ->on('offers');

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
        Schema::dropIfExists('offer_option');
    }
}
