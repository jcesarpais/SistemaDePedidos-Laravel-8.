<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotoboyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motoboy', function (Blueprint $table) {
            $table->bigIncrements('motoboy_id');
            $table->string('motoboy_name');
            $table->string('motoboy_phone_number')->unique();
            $table->string('motoboy_password');
            $table->integer('motoboy_status');
            $table->dateTime('added_on');
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
        Schema::dropIfExists('motoboy');
    }
}
