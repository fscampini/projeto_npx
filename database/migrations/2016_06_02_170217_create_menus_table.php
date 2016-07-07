<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route_description', 200);
            $table->string('font_awesome_description', 200);
            $table->string('name', 100)->unique();
            $table->string('access_group', 80);
            $table->integer('parent_menu_id')->nullable()->unsigned();
            $table->foreign('parent_menu_id')->references('id')->on('menus');
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
        Schema::drop('menus');
    }
}
