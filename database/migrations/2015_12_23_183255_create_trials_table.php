<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trials', function (Blueprint $table) {


            $table->increments('id');
            $table->integer('researcher_id')->unsigned();
            $table->foreign('researcher_id')->references('id')->on('researchers');

            $table->boolean('active');
            $table->string('name');
            $table->text('description');
            $table->text('criteria');
            $table->integer('payment');
            $table->integer('duration_in_minutes');
            $table->float('longitude',8,6);
            $table->float('latitude',8,6);
            $table->string('phone');
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
        Schema::drop('trials');
    }
}
