<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('value');
            $table->unsignedBigInteger('service_id');
            $table->smallInteger('hidden');
            $table->integer('order_column');
            $table->smallInteger('show_on_service');
            $table->timestamps();

            $table->index('hidden', 'idx-hidden');
            $table->index('show_on_service', 'idx-show_on_service');

            $table->index('service_id', 'idx-service_id');
            $table->foreign('service_id')->references('id')->on('services')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
