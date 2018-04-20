<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specials_users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('specials_id')->unsigned();
            $table->integer('users_id')->unsigned();


            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('specials_id')->references('id')->on('specials');
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
        Schema::dropIfExists('specials_users');
    }
}
