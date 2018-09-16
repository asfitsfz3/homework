<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Good extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good', function (Blueprint $table) {
            $table->increments('good_id');
            $table->string('name');
            $table->string('category_id');
            $table->integer('price');
            $table->string('photo_id');
            $table->string('description');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('category', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('name');
            $table->string('description');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('good_id');
            $table->string('email');
            $table->rememberToken();
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
        Schema::dropIfExists('good');
        Schema::dropIfExists('category');
        Schema::dropIfExists('order');
    }
}
