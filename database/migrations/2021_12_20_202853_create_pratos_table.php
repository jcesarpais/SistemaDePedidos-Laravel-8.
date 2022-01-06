<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratos', function (Blueprint $table) {
            $table->bigIncrements('pratos_id');
            $table->string('pratos_name');
            $table->longText('pratos_detail');
            $table->text('pratos_image');
            $table->integer('pratos_status');
            $table->float('pratos_price', 10,2)->NULL();
                        
            $table->foreignId('category_id');

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
        Schema::dropIfExists('pratos');
    }
}
