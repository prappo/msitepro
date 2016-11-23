<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_acts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profileID')->nullable();
            $table->string('commentId')->nullable();
            $table->string('commentTypeId')->nullable();
            $table->string('relatedCommentActivityId')->nullable();
            $table->string('commentDateCaption')->nullable();
            $table->string('commentReply')->nullable();
            $table->string('relatedLinkPage')->nullable();
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
        Schema::drop('user_acts');
    }
}
