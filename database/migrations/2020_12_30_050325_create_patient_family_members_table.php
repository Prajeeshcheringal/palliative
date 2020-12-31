<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientFamilyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_family_members', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('pat_id');
            $table->string('name', 50)->nullable();
            $table->string('relation', 50)->nullable();
            $table->integer('age')->nullable();
            $table->string('education', 50)->nullable();
            $table->string('married', 50)->nullable();
            $table->string('job', 50)->nullable();
            $table->text('disease')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('patient_family_members');
    }
}
