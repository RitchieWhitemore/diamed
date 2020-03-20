<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('value');
            $table->unsignedBigInteger('service_id');
            $table->boolean('hidden');
            $table->integer('order_column');
            $table->timestamps();

            $table->index('hidden', 'idx-hidden');

            $table->index('service_id', 'idx-service_id');
            $table->foreign('service_id')->references('id')->on('services')->onUpdate('restrict')->onDelete('cascade');
        });

        Schema::table('prices', function (Blueprint $table) {
            $table->dropColumn('show_on_service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_prices');

        Schema::table('prices', function (Blueprint $table) {
            $table->smallInteger('show_on_service')->after('order_column');
            $table->index('show_on_service', 'idx-show_on_service');
        });
    }
}
