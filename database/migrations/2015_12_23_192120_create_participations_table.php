<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {

            $table->increments('id');

            $table->text('participant_comment');

            $table->integer('participant_id')->unsigned();
            $table->integer('trial_id')->unsigned();

            $table->foreign('participant_id')->references('id')->on('participants');
            $table->foreign('trial_id')->references('id')->on('trials');

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
        Schema::drop('participations');
    }
}
