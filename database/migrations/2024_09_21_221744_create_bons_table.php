<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bons', function (Blueprint $table) {
            $table->id();
            $table->uuid('_id')->unique();
            $table->string('motif');
            $table->decimal('montant', 10, 2);
            $table->foreignId('employe_id')->constrained()->cascadeOnDelete();
            $table->foreignId('type_bon_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bons');
    }
};
