<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Table;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medical_records', function ($table) {
            //
            $table->string('medical_record');
            $table->string('description');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patient_infos')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medical_records', function ($table) {
            //
            $table->string('medical_record');
            $table->string('description');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patient_infos')->onDelete('CASCADE');
        });
    }
}
