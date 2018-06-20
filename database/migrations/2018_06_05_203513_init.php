<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration
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
            $table->string("type");
            $table->integer("layout");
            $table->timestamps();
        });

        Schema::create('competences',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('parent_id')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        Schema::create('forms_has_competences',function (Blueprint $table){
            $table->increments('id');
            $table->integer('competence_id');
            $table->integer('form_id');
            $table->timestamps();
        });

        Schema::create('questions', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('competences_has_questions',function (Blueprint $table){
            $table->increments('id');
            $table->integer('question_id');
            $table->integer('competence_id');
            $table->timestamps();
        });


        Schema::create('questionanswers',function(Blueprint $table){
            $table->increments('id');
            $table->integer('questions_id');
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

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('licence', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('code')->nullable();
            $table->text('discription');
            $table->boolean('buyable');
            $table->float('price',2,2)->nullable();
            $table->string('duration_type');
            $table->integer('duration_time');
            $table->text('forms')->nullable();
            $table->timestamps();
        });
        Schema::create('user_has_licence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('licence_id');
            $table->timestamp('end_date')->nullable();
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
        //
    }
}
