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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('admin');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('forms',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->boolean('active');
            $table->timestamps();
        });

        Schema::create('competences',function (Blueprint $table){
            $table->increments('id');
            $table->integer('form_id');
            $table->string('name');
            $table->integer('parent_id')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('competencequestions', function(Blueprint $table){
            $table->increments('id');
            $table->integer('competence_id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('competencequestionanswers',function(Blueprint $table){
            $table->increments('id');
            $table->integer('competencequestions_id');
            $table->integer('position');
            $table->integer('weight');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('session', function(Blueprint $table){
            $table->increments('id');
            $table->string('ip');
            $table->string('session_code');
            $table->timestamps();
        });
        Schema::create('session_answers', function(Blueprint $table){
            $table->increments('id');
            $table->integer('competencequestionanswer_id');
            $table->integer('session_id');
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
        Schema::dropIfExists('users');
    }
}
