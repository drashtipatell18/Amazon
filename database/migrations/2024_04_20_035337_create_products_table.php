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
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->double('price',10,2);
            $table->double('compare_price',10,2);
            $table->foreginId('category_id')->constrained()->onDelete('cascade');
            $table->foreginId('sub_category_id')->constrained()->onDelete('cascade');
            $table->foreginId('brand_id')->constrained()->onDelete('cascade');
            $table->enum('is_featured',['Yes','No'])->defult('No');
            $table->string('sku');
            $table->enum('track_qty',['Yes','No'])->defult('Yes');
            $table->integer('qty');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
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
