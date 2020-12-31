<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('reg_no', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('name', 50)->nullable();
            $table->integer('age')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('care_of', 50)->nullable();
            $table->string('panchayath', 50)->nullable();
            $table->string('ref_no', 50)->nullable();
            $table->string('organization', 50)->nullable();
            $table->integer('pincode')->nullable();
            $table->string('volunteer', 50)->nullable();
            $table->text('location')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
