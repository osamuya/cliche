<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardNormalrepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_normalreps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uniqeid', 64)->nullable();
            $table->string('reluniqeid', 64)->nullable();
            $table->string('nickname', 128)->nullable();
            $table->string('email')->nullable();
            $table->string('sex', 16)->nullable();
            $table->longText('submission')->nullable();
            $table->longText('remark')->nullable();
            $table->integer('status')->nullable();
            $table->unsignedTinyInteger('delflag')->nullable();
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
        Schema::dropIfExists('board_normalreps');
    }
}
