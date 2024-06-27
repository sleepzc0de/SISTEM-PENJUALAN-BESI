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
        Schema::create('admin_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade'); // ID admin yang memesan
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade'); // ID penjual yang menerima pesanan
            $table->timestamp('order_date');
            $table->enum('status', ['pending', 'confirmed', 'shipped', 'cancelled']);
            $table->decimal('total_amount', 10, 2);
            $table->timestamps();
        });

        Schema::create('admin_order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_order_id')->constrained('admin_orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('product_penjuals')->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('admin_order_details');
        Schema::dropIfExists('admin_orders');
        Schema::enableForeignKeyConstraints();
    }
};
