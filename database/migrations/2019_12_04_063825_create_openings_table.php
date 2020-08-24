<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('openings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('category_id');
            $table->string('title');
            $table->longtext('description');
            $table->integer('cost');
            $table->dateTime('date');
            $table->string('poster');
            $table->integer('certificate')->nullable();
            $table->integer('vacancy')->nullable();
            $table->string('fee')->nullable();
            $table->string('promotion')->nullable();
            $table->longText('terms')->nullable();
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
        Schema::dropIfExists('openings');
    }
}
