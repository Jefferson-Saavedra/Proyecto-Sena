<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('userEmployee', 45);
            $table->string('passwordEmployee', 45);
            $table->string('nameEmployee', 45);
            $table->string('lastnameEmployee', 45);
            $table->int('phoneNumberEmployee', 20);
            $table->string('emailEmployee', 70);
            $table->unsignedBigInteger('id_employeeposition')->nullable();
            $table->foreign('id_employeeposition')->references('id')->on('employeepositions');
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
        Schema::dropIfExists('employees');
    }
}
