<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->integerIncrements('food_id',10);
            $table->integer('rs_id')->length(10)->unsigned();
            $table->integer('food_cat_id')->length(10)->unsigned();
            $table->string('title',222);
            $table->string('slogan',222);
            $table->decimal('price',10,2);
            $table->string('img',222);
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
        Schema::dropIfExists('food');
    }
}
