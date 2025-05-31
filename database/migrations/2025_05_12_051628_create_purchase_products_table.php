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
        Schema::create('purchase_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('reqisition_no')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->decimal('unit',15,2);
            $table->decimal('price',15,2);
            $table->string('unit_type')->nullable();
            $table->string('brand_name')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_products');
    }
};
