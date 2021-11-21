<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOfferIdToHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('halls', function (Blueprint $table) {
            $table->unsignedBigInteger('offer_id')
                ->nullable();

            $table->foreign('offer_id')
                ->references('id')
                ->on('offers')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('halls', function (Blueprint $table) {
            //
        });
    }
}
