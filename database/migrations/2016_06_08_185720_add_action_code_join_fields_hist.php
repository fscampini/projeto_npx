<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActionCodeJoinFieldsHist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('document_histories', function (Blueprint $table) {
            $table->integer('action_code_id')->default(0);
            $table->foreign('action_code_id')->references('id')->on('action_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('document_histories', function (Blueprint $table) {
            $table->removeColumn('action_code_id');
        });
    }
}
