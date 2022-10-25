<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained('suppliers', 'id');
            $table->foreignId('purchase_order_id')->constrained('purchase_orders', 'id');
            $table->enum('status', ['pending','paid'])->default('pending');
            $table->string('invoice_number');
            $table->date('invoice_date');
            $table->date('due_date');
            $table->timestamps();
            $table->foreignId('created_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
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
};
