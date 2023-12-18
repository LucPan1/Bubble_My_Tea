<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('commande')) {
            Schema::create('commande', function (Blueprint $table) {
                $table->id();
                // Ajoutez d'autres colonnes nécessaires pour votre table commande
                $table->unsignedBigInteger('user_id'); // Ajoutez la colonne product_id
                $table->foreign('user_id')->references('id')->on('users');
                $table->unsignedBigInteger('history_command_id');
                $table->foreign('history_command_id')->references('id')->on('historyCommand');
              
            
                $table->timestamps();
            });
        }
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande');
    }
};
