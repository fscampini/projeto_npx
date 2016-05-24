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
            $table->smallInteger('status')->default(0);
            $table->string('data_base_filename', 100);
            $table->string('original_file_name', 100);
            $table->string('partner', 100);
            $table->integer('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->integer('last_updated_by');
            $table->foreign('last_updated_by')->references('id')->on('users');
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
