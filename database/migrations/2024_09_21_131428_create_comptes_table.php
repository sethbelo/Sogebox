<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->uuid('_id')->unique();
            $table->string('nom_compte');
            $table->string('type_compte');
            $table->decimal('solde_initial', 10,2);
            $table->decimal('solde_actuel', 10,2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comptes');
    }
};
