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
        Schema::create('orders', function (Blueprint $table) {
   $table->id();
$table->string('user_name');
$table->string('product_name');
$table->integer('quantity');
$table->integer('price');
$table->string('order_type');
$table->string('shipping')->default(0);
$table->integer('total_price');
$table->string('address')->nullable();
$table->string('payment_method');
$table->string('contact');
$table->string('email');
$table->string('status')->default('pending');
$table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete();

        $table->foreignId('book_id')
            ->constrained('books')
            ->cascadeOnDelete();
$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
