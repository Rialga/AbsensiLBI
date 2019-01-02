<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryinternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historyinterns', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('no_intern');
            $table->date('date');
            $table->time('time_in');
            $table->time('time_out')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('no_intern')->references('no_intern')->on('internships');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historyinterns');
    }
}
