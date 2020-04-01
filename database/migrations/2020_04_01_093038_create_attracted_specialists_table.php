<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractedSpecialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attracted_specialists', function (Blueprint $table) {
            $table->bigInteger('specialist_id');
            $table->bigInteger('attracted_specialist_id');
            $table->string('attracted_specialist_type');

            $table->index(['specialist_id', 'attracted_specialist_id', 'attracted_specialist_type'],
                'idx-specialist-entity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attracted_specialists');
    }
}
