<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampingPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('en-title');
            $table->string('state');
            $table->string('address');
            $table->text('body');
            $table->text('en-body');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('opening');
            $table->string('image_path');
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
        Schema::dropIfExists('camping_place');
    }
}
