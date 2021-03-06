<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('user_id')->unsigned();
            $table->string('title');
            $table->string('thread_detail', 1000);
            $table->integer('category_id')->default('1');
            // $table->integer('category_id')->unsigned();
            $table->integer('delflag')->default('1');
            $table->dateTime('modified')->nullable();
            $table->timestamps();

            // 外部キーを設定する
            $table->foreign('user_id')->references('id')->on('users');

            // 外部キーを設定する
            // $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
