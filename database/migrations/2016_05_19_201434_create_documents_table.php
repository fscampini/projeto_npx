<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('original_file_name', 100);
            $table->string('partner', 100);
            $table->integer('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->integer('last_updated_by');
            $table->foreign('last_updated_by')->references('id')->on('users');
            $table->dateTime('ws_send_date')->nullable();
            $table->dateTime('partner_ws_return_date')->nullable();
            $table->smallInteger('sending_quantity')->default(0);
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
        Schema::drop('documents');
    }
}
