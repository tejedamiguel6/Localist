<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 400);
            $table->integer('business_id')->unsigned();
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->string('monday', 400);
            $table->string('tuesday', 400);
            $table->string('wednesday', 400);
            $table->string('thursday', 400);
            $table->string('friday', 400);
            $table->string('saturday', 400);
            $table->string('sunday', 400);
            $table->timestamps();
        });

        Schema::table('specials', function(Blueprint $table) {
        $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specials');
    }
}
