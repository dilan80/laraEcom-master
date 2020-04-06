<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant', function (Blueprint $table) {
            $table->integerIncrements('rs_id',10);
            $table->integer('c_id')->length(10)->unsigned();
            $table->string('title',222);
            $table->string('email',222);
            $table->string('phone',10);
            $table->string('url',222);
            $table->string('o_hr',222);
            $table->string('c_hr',222);
            $table->string('o_days',222);
            $table->string('address',222);
            $table->string('image',222);
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
        Schema::dropIfExists('restaurant');
    }
}
