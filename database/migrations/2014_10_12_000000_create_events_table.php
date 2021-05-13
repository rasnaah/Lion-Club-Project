<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            //  $table->id();
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('club');
            $table->date('date');
            $table->time('time')->toString();
            $table->string('image');
            $table->text('description');
            /*$table->rememberToken();*/
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
        //Schema::dropIfExists('rescue');
        Schema::table('event', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
/*    {
        Schema::dropIfExists('event');
    }*/
}
