<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('pat_id')->nullable()->index('patient_relation');
            $table->date('date')->nullable();
            $table->text('bok_note')->nullable();
            $table->text('disease_details')->nullable();
            $table->text('doctors_note')->nullable();
            $table->text('mental_note')->nullable();
            $table->string('bp', 50)->nullable();
            $table->string('pulse', 20)->nullable();
            $table->string('tempreture', 20)->nullable();
            $table->text('general_state')->nullable();
            $table->text('mouth')->nullable();
            $table->text('skin')->nullable();
            $table->text('head')->nullable();
            $table->text('hidden_area')->nullable();
            $table->text('other_treatment')->nullable();
            $table->text('surroundings')->nullable();
            $table->string('food', 10)->nullable();
            $table->string('water', 10)->nullable();
            $table->string('urine', 10)->nullable();
            $table->string('exercise', 10)->nullable();
            $table->string('body_cleaning', 10)->nullable();
            $table->string('sleep', 10)->nullable();
            $table->string('constipation', 10)->nullable();
            $table->integer('status')->nullable()->default(1);
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
        Schema::dropIfExists('bookings');
    }
}
