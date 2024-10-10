<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pointings', function (Blueprint $table) {
            $table->id();
            $table->uuid('_id')->unique();

            $table->foreignId('employe_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->date('date');
            $table->time('heure_arrivee');
            $table->time(column: 'heure_depart');
            $table->string(column: 'observation')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pointings');
    }
};
