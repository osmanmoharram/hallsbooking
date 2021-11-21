<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('space');
            $table->string('capacity')->default(0);
            $table->enum('for', ['men', 'women', 'men and women'])->default('men and women');
            $table->enum('rating', [0, 0.5, 1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5])->default(0);
            $table->string('price')->default(0.00);
            $table->string('photos')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('halls');
    }
}
