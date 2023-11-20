<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustingSubsidiaryProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidiaries', function (Blueprint $table) {
            $table->id();
            $table->string('subsidiary', 30);
            $table->timestamps();
        });


        Schema::create('subsidiary_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('subsidiary_id');
            $table->unsignedBigInteger('product_id');

            $table->decimal('selling_price', 8, 2);
            $table->integer('minimum_stock');
            $table->integer('maximum_stock');

            $table->timestamps();

            $table->foreign('subsidiary_id')->references('id')->on('subsidiaries');
            $table->foreign('product_id')->references('id')->on('products');
        });

        // removendo da tabela products

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['selling_price', 'minimum_stock', 'maximum_stock']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('selling_price', 8, 2);
            $table->integer('minimum_stock');
            $table->integer('maximum_stock');
        });


        Schema::dropIfExists('subsidiary_products');
        Schema::dropIfExists('subsidiaries');
    }
}
