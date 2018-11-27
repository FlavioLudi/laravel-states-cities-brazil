<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cities', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('state_id')->unsigned();
            $table->string('name', 64);
            $table->timestamps();
            $table->softDeletes();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('cities');

    }

}
