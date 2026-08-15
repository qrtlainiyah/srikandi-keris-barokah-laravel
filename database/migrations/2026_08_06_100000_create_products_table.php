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
            $table->string('name');
            $table->string('category');
            $table->text('description');
            $table->string('price');
            $table->string('badge')->nullable();
            $table->decimal('rating', 3, 1)->default(5.0);
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('has_detail')->default(false);
            $table->string('detail_image')->nullable();
            $table->text('whatsapp_url')->nullable();
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
