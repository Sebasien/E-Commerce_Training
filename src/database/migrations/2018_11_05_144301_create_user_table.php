<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_basket')->unsigned();
            $table->char('name');
            $table->longText('email');
            $table->longText('password');
            $table->char('statut');
            $table->timestamps();
        });

        Schema::table('user', function (Blueprint $table) {
            $table->foreign('id_basket')->references('id')->on('basket');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
