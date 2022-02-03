<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office', function (Blueprint $table) {
            $table->increments('id');
            $table->string('office', 32);
            $table->string('email', 255)->unique();
            $table->integer('tel');
            $table->string('address', 255);
            $table->string('password', 255);
            $table->string('image', 255);
            $table->integer('delflag');
            $table->datetime('created');
            $table->dateTime('modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office');
    }
}
