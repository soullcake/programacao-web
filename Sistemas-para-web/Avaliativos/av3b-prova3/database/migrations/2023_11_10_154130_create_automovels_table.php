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
        Schema::create('automovels', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->year('ano');
            $table->string('fabricante');
            $table->decimal('quilometragem', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automovels');
    }
};
