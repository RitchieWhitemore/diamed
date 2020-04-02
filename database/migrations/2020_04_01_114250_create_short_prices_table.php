<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('value');
            $table->boolean('hidden');
            $table->integer('order_column');

            $table->bigInteger('short_prices_id');
            $table->string('short_prices_type');

            $table->index(['id', 'short_prices_id', 'short_prices_type'],
                'idx-short_prices-entity');
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
        Schema::dropIfExists('short_prices');
    }
}
