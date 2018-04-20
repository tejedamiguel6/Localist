<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('businesses_id')->unsigned();
            $table->integer('users_id')->unsigned();


            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('businesses_id')->references('id')->on('businesses');
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
        Schema::dropIfExists('businesses_users');
    }
}
