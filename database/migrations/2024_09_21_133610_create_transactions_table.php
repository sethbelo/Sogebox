<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('_id')->unique();
            $table->foreignId('id_compte_debit')
                ->constrained(
                    'depenses',
                    'id',
                    'id_compte_debit'
                )
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('id_compte_credit')
                ->constrained(
                    'recettes',
                    'id',
                    'id_compte_credit'
                )
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->decimal('montant', 10, 2);
            $table->text('description')->nullable();
            $table->date('date_transaction');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
