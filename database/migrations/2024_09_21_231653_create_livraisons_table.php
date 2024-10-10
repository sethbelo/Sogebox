<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->uuid('_id')->unique();
            $table->foreignId('projet_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('date_debut');
            $table->date('date_echeance');
            $table->string('adresse_livraison');
            $table->foreignId('mode_livraison_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
