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

        Schema::create('sales_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outlet_id')->constrained('outlets', 'id');
            $table->string('order_no');
            $table->foreignId('customer_id')->constrained('customers', 'id');
            $table->dateTime('order_date');
            $table->enum('order_status', ['pending', 'paid', 'processed', 'shipping', 'received', 'refund', 'cancel'])->default('pending');
            $table->foreignId('payment_id')->constrained('payments', 'id');
            $table->integer('subtotal');
            $table->integer('tax');
            $table->integer('total');
            $table->integer('cash');
            $table->integer('change');
            $table->enum('shipping_method', ['pickup', 'delivery', 'instant delivery', 'courier'])->default('pickup');
            $table->string('receiver_name')->nullable(true);
            $table->string('receiver_phone')->nullable(true);
            $table->text('shipping_address')->nullable(true);
            $table->foreignId('city_id')->nullable(true)->constrained('cities', 'id');
            $table->foreignId('region_id')->nullable(true)->constrained('regions', 'id');
            $table->foreignId('country_id')->nullable(true)->constrained('contries', 'id');
            $table->string('postcode')->nullable(true);
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
        Schema::dropIfExists('sales_orders');
    }
};