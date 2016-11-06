<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('mobile')->nullable();
            $table->string('nationality')->nullable();
            $table->string('knownAs')->nullable();
            $table->string('knownAt')->nullable();
            $table->string('address')->nullable();
            $table->string('landmark')->nullable();
            $table->string('district')->nullable();
            $table->string('area')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('website')->nullable();
            $table->string('facebookId')->nullable();
            $table->string('about')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('type')->nullable();
            $table->string('code')->nullable();
            $table->string('status')->nullable();
            $table->string('gender')->nullable();
            $table->string('dateOfBirth')->nullable();
            $table->string('occupation')->nullable();
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
        Schema::drop('users');
    }
}
