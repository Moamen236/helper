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
            $table->tinyInteger('specialist_id');
            $table->tinyInteger('caregiver_id')->nullable();
            $table->string('name');
            $table->text('picture')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->tinyInteger('no_of_bro')->nullable();
            $table->tinyInteger('arr_btw_bro')->nullable();
            $table->string('cg_name');
            $table->string('cg_relation')->nullable();
            $table->string('cg_phone')->nullable();
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