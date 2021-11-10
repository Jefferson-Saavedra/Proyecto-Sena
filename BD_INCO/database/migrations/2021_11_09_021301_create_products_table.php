<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nameProduct', 45);
            $table->int('quantityProduct', 10);
            $table->int('priceProduct', 10);
            $table->string('brandProduct', 45);
            $table->int('ivaProduct', 10);
            $table->string('descriptionProduct', 250);
            $table->unsignedBigInteger('id_supplier')->nullable();
            $table->foreign('id_supplier')->references('id')->on('suppliers');
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
        Schema::dropIfExists('products');
    }
}
