<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputs', function (Blueprint $table) {
            $table->id();
            $table->string('productOutput', 45);
            $table->int('quantityOutput', 10);
            $table->string('brandProductOutput', 45);
            $table->date('dateOutput');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')->references('id')->on('products');
            $table->unsignedBigInteger('id_employee')->nullable();
            $table->foreign('id_employee')->references('id')->on('employees');
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
        Schema::dropIfExists('outputs');
    }
}
