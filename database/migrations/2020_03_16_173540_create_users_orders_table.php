<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_orders', function (Blueprint $table) {
            $table->integerIncrements('o_id',10);
            $table->integer('u_id')->length(10)->unsigned();
            $table->string('title',222);
            $table->integer('quantity')->length(10)->unsigned();
            $table->decimal('price',10,2);
            $table->integer('status')->length(10)->unsigned();
            $table->timestamp('date');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_orders');
    }
}
