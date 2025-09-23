<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type'); 
            $table->text('description')->nullable();
            $table->decimal('price', 12, 2)->default(0);
            $table->string('duration')->nullable(); // contoh: "3 bulan", "10x pertemuan"
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
