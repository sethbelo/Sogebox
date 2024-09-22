<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventaires', function (Blueprint $table) {
            $table->id();
            $table->uuid('_id')->unique();
            $table->foreignId('produit_id')->constrained()->noActionOnDelete()->noActionOnUpdate();
            $table->string('mouvement');
            $table->integer('quantite');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventaires');
    }
};
