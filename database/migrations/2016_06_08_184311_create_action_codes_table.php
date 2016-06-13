<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 80);
            $table->text('font_awesome_description');
            $table->string('status_label', 80);
            $table->integer('last_updated_by');
            $table->foreign('last_updated_by')->references('id')->on('users');
            $table->integer('created_by');
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::drop('action_codes');
    }
}
