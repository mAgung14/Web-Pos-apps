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

        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained('suppliers','id');
            $table->foreignId('product_id')->constrained('products','id');
            $table->integer('price');
            $table->integer('qty');
            $table->string('po_number');
            $table->enum('po_status',['open','proccesing','close','cancel'])->default('open');
            $table->string('payment_id');
            $table->enum('payment_status',['pending','paid'])->default('pending');
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
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('purchase_orders');

        Schema::enableForeignKeyConstraints();
    }
};
