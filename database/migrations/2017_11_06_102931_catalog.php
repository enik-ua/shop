<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catalog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->dateTime('modified');
            $table->string('programId');
            $table->string('programName');
            $table->float('price');
            $table->string('currency');
            $table->text('descriprion');
            $table->string('manufacturer');
            $table->integer('ean');
            $table->string('image');
            $table->float('priceOld');
            $table->float('shippingCosts');
            $table->string('merchantCategory');
            $table->string('merchantEmail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogs');
    }
}
