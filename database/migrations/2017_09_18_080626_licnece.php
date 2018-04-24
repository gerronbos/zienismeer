<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Licnece extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
