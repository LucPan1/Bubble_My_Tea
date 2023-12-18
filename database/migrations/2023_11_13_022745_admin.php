<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('Admin')) {
            Schema::create('Admin', function (Blueprint $table) {
                $table->id();
                $table->string('firstname');
                $table->string('surname');
                $table->string('username')->unique();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('Admin');
    }
};
