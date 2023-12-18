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
        if (!Schema::hasTable('CommandProduit')) {
        Schema::create('CommandProduit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Product_id');
            $table->unsignedBigInteger('Commande_id');
            $table->timestamps();
            $table->foreign('Commande_id')->references('id')->on('commande');
            $table->foreign('product_id')->references('id')->on('Produit');  
           
        });
         }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CommandProduit');
    }
};
