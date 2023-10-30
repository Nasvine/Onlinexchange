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
        Schema::create('monnaires', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_monnaie');
            $table->string('symbol_of_monnaie')->nullable();
            $table->enum('type_of_monnaie', ['fiat', 'crypto'])->default('fiat');
            $table->double('stock_disponible')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monnaires');
    }
};
