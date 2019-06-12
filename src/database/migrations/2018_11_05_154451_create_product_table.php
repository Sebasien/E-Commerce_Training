<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->char('title');
            $table->longText('description');
            $table->integer('price')->unsigned();
            $table->float('stock');
            $table->integer('id_categorie')->unsigned();
            $table->timestamps();
        });

        Schema::table('product', function (Blueprint $table) {
            $table->foreign('id_categorie')->references('id')->on('categorie');
            $table->foreign('id_user')->references('id')->on('user');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
