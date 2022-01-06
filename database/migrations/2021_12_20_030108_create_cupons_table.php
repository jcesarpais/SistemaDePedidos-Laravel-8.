<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupons', function (Blueprint $table) {
            $table->bigIncrements('cupon_id');
            $table->string('cupon_code_name')->unique();
            $table->integer('cupon_type');
            $table->integer('cupon_value');
            $table->integer('cart_min_value');
            $table->datetime('expired_on');
            $table->integer('cupon_status');
            $table->datetime('added_on');
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
        Schema::dropIfExists('cupons');
    }
}
