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
            $table->id();
            $table->string('name');
            $table->date('dob')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->tinyInteger('no_of_bro')->nullable();
            $table->tinyInteger('arr_btw_bro')->nullable();
            $table->string('cg_name');
            $table->string('cg_relation')->nullable();
            $table->string('cg_phone')->nullable();
            $table->foreignId('caregiver_id')->constrained();
            $table->foreignId('specialist_id')->constrained();
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
        Schema::dropIfExists('patients');
    }
}