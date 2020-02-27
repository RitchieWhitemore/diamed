<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSpecialistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_specialist', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('specialist_id');
            $table->timestamps();

            $table->index(['service_id', 'specialist_id']);

            $table->foreign('service_id')->references('id')->on('services')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('specialist_id')->references('id')->on('specialists')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_specialist');
    }
}
