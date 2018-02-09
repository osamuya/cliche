<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardNormalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_normals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uniqeid', 64)->nullable();
            $table->string('category', 128)->nullable();
            $table->string('nickname', 128)->nullable();
            $table->string('email')->nullable();
            $table->string('prefectures', 64)->nullable();
            $table->string('sex', 16)->nullable();
            $table->longText('submission')->nullable();
            $table->longText('files')->nullable();
            $table->string('multipleSelects', 2048)->nullable();
            $table->longText('remark')->nullable();
            $table->string('editkey', 256)->nullable();
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
        Schema::dropIfExists('board_normals');
    }
}
