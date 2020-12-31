<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOtherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_other_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('pat_id')->nullable();
            $table->text('need_food')->nullable();
            $table->text('report_of_person')->nullable();
            $table->text('patient_assumptiom')->nullable();
            $table->text('relative_assumption')->nullable();
            $table->text('patient_social')->nullable();
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
        Schema::dropIfExists('patient_other_details');
    }
}
