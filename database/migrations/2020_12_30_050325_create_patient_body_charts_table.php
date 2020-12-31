<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientBodyChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_body_charts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('pat_id');
            $table->string('body_part', 50)->nullable();
            $table->string('side', 50)->nullable();
            $table->string('grade', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_body_charts');
    }
}
