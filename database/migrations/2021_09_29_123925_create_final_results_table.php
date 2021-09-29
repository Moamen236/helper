<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_results', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('RB')->nullable();
            $table->tinyInteger('SI')->nullable();
            $table->tinyInteger('SC')->nullable();
            $table->tinyInteger('ER')->nullable();
            $table->tinyInteger('CS')->nullable();
            $table->tinyInteger('MS')->nullable();
            $table->tinyInteger('coefficient');
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
        Schema::dropIfExists('final_results');
    }
}