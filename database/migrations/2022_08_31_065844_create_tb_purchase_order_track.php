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
        Schema::create('purchase_order_tracks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_order_id')->constrained('purchase_orders','id');
            $table->string('track_number');
            $table->dateTime('shipping_date');
            $table->integer('qty');
            $table->enum('approval_status',['approved','retuned'])->nullable(true);
            $table->text('approval_notes')->nullable(true);
            $table->dateTime('approved_at')->nullable(true);
            $table->foreignId('approved_by')->nullable(true)->constrained('users','id');
            $table->timestamps();
            $table->foreignId('created_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_order_tracks');
    }
};
