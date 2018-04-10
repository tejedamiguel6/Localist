<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path')->nullable();
            $table->string('business_name', 50);
            $table->integer('user_id')->unsigned();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('special_id')->unsigned()->nullable();
            $table->string('street', 40);
            $table->string('city', 40);
            $table->string('zip', 10)->nullable();
            $table->string('phone_num', 12)->nullable();
            $table->string('url', 45)->nullable();
            $table->string('contact_first_name', 30)->nullable();
            $table->string('contact_last_name', 45)->nullable();
            $table->string('email_address', 30)->nullable();
            $table->timestamps();
        });
        Schema::table('businesses', function(Blueprint $table) {
       $table->foreign('user_id')->references('id')->on('users');
       $table->foreign('state_id')->references('id')->on('states');
       $table->foreign('special_id')->references('id')->on('specials');
   });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}