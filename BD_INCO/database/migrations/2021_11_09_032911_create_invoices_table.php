<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->int('paymentPointInvoice', 2);
            $table->date('dateInvoice');
            $table->int('ivaInvoice', 10);
            $table->int('totalProductsInvoice', 8);
            $table->int('totalPriceInvoice', 8);
            $table->int('cashReceivedInvoice', 8);
            $table->int('cashBackInvoice', 8);
            $table->unsignedBigInteger('id_client')->nullable();
            $table->foreign('id_client')->references('id')->on('clients');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')->references('id')->on('products');
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
        Schema::dropIfExists('invoices');
    }
}
