<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_models', function (Blueprint $table) {
            $table->id();
            $table->string("reg_no");
            $table->string("name");
            $table->integer("age");
            $table->string("sex");
            $table->string("address");
            $table->string("unit");
            $table->string("department");
            $table->integer("fees");
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
        Schema::dropIfExists('patients_models');
    }
}
