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
        if (!Schema::hasTable('Produit')) {
            Schema::create('Produit', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->mediumText('picture')->nullable();
                $table->string('description');
                $table->double('price');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
