<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('approbations', function (Blueprint $table) {
            $table->id();
            $table->uuid('_id')->unique();
            $table->string('validation');
            $table->date('date');
            $table->foreignId('bon_id')->constrained()->noActionOnDelete()->noActionOnUpdate();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('approbations');
    }
};
