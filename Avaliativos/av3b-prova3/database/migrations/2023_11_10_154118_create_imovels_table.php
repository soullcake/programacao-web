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
        Schema::create('imovels', function (Blueprint $table) {
            $table->id();
            $table->string('localizacao', 100);
            $table->decimal('valor', 10, 2);
            $table->integer('numero_do_quarto');
            $table->tinyInteger('piscina')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imovels');
    }
};
