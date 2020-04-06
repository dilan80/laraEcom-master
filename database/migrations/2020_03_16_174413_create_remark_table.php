<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remark', function (Blueprint $table) {
            $table->id();
            $table->integer('frm_id')->length(11)->unsigned();
            $table->string('status',225);
            $table->string('remark',222);
            $table->timestamp('remarkdate');
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
        Schema::dropIfExists('remark');
    }
}
