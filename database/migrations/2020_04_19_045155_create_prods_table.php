<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('catId')->unsigned();
            $table->foreign('catId')->references('id')->on('cats')->onDelete('cascade')->onUpdate('cascade');
            $table->string('img');
            $table->text('des');
            $table->integer('available');
            $table->float('price');
            $table->integer('sale')->default(0);
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
        Schema::dropIfExists('prods');
    }
}
