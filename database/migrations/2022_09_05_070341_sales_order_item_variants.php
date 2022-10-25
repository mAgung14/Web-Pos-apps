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

        Schema::create('sales_order_item_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sales_order_id')->constrained('sales_orders', 'id');
            $table->foreignId('product_id')->constrained('products', 'id');
            $table->foreignId('product_variant_id')->constrained('product_variants', 'id');
            $table->integer('extra_price')->nullable(true);
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
        Schema::dropIfExists('sales_order_item_variants');
    }
};