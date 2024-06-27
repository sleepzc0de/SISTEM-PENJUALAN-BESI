<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seller_order_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade'); // ID admin yang memesan
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade'); // ID penjual yang menerima pesanan
            $table->timestamp('order_date');
            $table->enum('status', ['pending', 'confirmed', 'shipped', 'cancelled']);
            $table->decimal('total_amount', 10, 2);
            $table->timestamps();
        });

        Schema::create('seller_order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_order_history_id')->constrained('seller_order_histories')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_order_details');
        Schema::dropIfExists('seller_order_histories');
    }
};
