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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productid')->nullable();
            $table->text('title');
            $table->longText('description');
            $table->integer('rating')->default(0);
            $table->json('size')->nullable();
            $table->json('color')->nullable();
            $table->float('price');
            $table->integer('quantity');
            $table->json('images');
            $table->unsignedInteger('sales')->default(0);
            $table->boolean('status')->default(false);
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreignId('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
