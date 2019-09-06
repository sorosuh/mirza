<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dificultu');
            $table->string('major');
            $table->string('title');
            $table->integer('code');
            $table->string('link');
            $table->string('price');
            $table->string('new_price');
            $table->integer('verify')->default(0);
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
        Schema::dropIfExists('Question');
    }
}
