<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_texts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading1');
            $table->string('color1');
            $table->text('text1');
            $table->string('heading2');
            $table->string('color2');
            $table->text('text2');
            $table->string('heading3');
            $table->string('color3');
            $table->text('text3');
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
        Schema::dropIfExists('home_texts');
    }
}
