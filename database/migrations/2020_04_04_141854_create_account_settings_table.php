<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('email_notification')->default('on');
            $table->string('push_notification')->nullable();
            $table->string('new_notification')->nullable();
            $table->string('direct_message')->default('on');
            $table->string('new_message')->nullable();
            $table->string('get_more')->nullable();
            $table->string('things_missed')->default('on');
            $table->string('best_products')->default('on');
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
        Schema::dropIfExists('account_settings');
    }
}
