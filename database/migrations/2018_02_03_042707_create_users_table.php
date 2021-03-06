<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        if(!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name', 30)->unique();
            $table->string('email')->unique();
            $table->string('password');
             $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('city')->nullable();
            $table->integer('role_id')->unsigned()->default(3);
            // $table->integer('business_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
    }
            Schema::table('users', function (Blueprint $table) {
           
            // $table->foreign('business_id')->references('id')->on('user');
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}