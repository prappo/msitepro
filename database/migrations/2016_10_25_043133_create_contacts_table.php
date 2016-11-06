<?php

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
            $table->increments('id');
            $table->string('name');
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
            $table->string('parent');
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
        Schema::drop('contacts');
    }
}
