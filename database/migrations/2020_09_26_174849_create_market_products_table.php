<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('market_id');
            $table->integer('size_type_id');
            $table->integer('price_low');
            $table->integer('price_high');
            $table->string('price_unit');
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
        Schema::dropIfExists('market_products');
    }
}
