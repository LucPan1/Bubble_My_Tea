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
        Schema::create('detailCommande', function (Blueprint $table) {
            $table->id();
            $table->string('poppings');
            $table->integer('sugar_quantity'); // Change 'int' to 'integer'
            $table->double('Total_price');
            $table->unsignedBigInteger('command_id');
            $table->foreign('command_id')->references('id')->on('commande');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailCommande');
    }
};
