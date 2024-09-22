<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->uuid('_id')->unique();
            $table->foreignId('employe_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->text('resume');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rapports');
    }
};
