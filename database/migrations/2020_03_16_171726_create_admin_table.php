<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->integerIncrements('adm_id',10);
            $table->string('username',45)->unique();
            $table->string('first_name',222);
            $table->string('last_name',222);
            $table->string('password',222);
            $table->string('email',222);
            $table->string('nic',6);
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
        Schema::dropIfExists('admin');
    }
}
