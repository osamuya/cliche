<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {

/*
            'category' => 'required',
            'surname' => 'required|max:32',
            'firstname' => 'required|max:32',
            'surnamekana' => 'required|max:32',
            'firstnamekana' => 'required|max:32',
            'email' => 'required|email',
            'retypeemail' => 'required|max:1200|same:email',
            'postNumber3' => 'required|digits:3|numeric',
            'postNumber4' => 'required|digits:4|numeric',
            'prefectures' => 'required|max:16',
            'municipality' => 'required|max:64',
            'address' => 'required|max:256',
            'telphoneAreacode' => 'required|numeric',
            'telphoneCitycode' => 'required|numeric',
            'telphoneSubscriber' => 'required|numeric',
            'mobilephoneAreacode' => 'present|numeric',
            'mobilephoneCitycode' => 'present|numeric',
            'mobilephoneSubscriber' => 'present|numeric',
            'sex' => 'required',
            'inquery' => 'required|max:2000',
            'agreement' => 'accepted',
*/
            
            $table->increments('id');
            /* sended contents */
            $table->string('category', 256)->nullable();
            $table->string('surname', 64)->nullable();
            $table->string('firstname', 64)->nullable();
            $table->string('surnamekana', 128)->nullable();
            $table->string('firstnamekana', 128)->nullable();
            $table->string('email')->nullable();
            $table->string('postNumber', 16)->nullable();
            $table->string('prefectures', 32)->nullable();
            $table->string('municipality', 32)->nullable();
            $table->string('address', 128)->nullable();
            $table->string('telphone', 64)->nullable();
            $table->string('mobilephone', 64)->nullable();
            $table->string('sex', 16)->nullable();
            $table->longText('inquery')->nullable();
            $table->string('agreement', 8)->nullable();
            /* Items required for administrative procedures */
            $table->longText('remark')->nullable();
            $table->integer('status')->nullable();
            $table->unsignedTinyInteger('delflag')->nullable();
            /* stamp */
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
        Schema::dropIfExists('contacts');
    }
}

