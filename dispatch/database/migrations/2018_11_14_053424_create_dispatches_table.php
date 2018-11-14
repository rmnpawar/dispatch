<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatches', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('dak_id');
            $table->bigInteger('letter_no');
            $table->date('dateofletter');
            $table->integer('section');
            $table->string('subject');
            $table->string('language');
            $table->string('from');
            $table->string('description');
            $table->integer('file_id');
            $table->integer('recepient');
            $table->date('dateinsection');
            $table->boolean('received')->nullable();
            $table->date('datereceived')->nullable();
            $table->date('disposal_date');
            $table->string('disposal_language');
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
        Schema::dropIfExists('dispatches');
    }
}
