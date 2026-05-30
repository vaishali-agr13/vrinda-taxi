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
        Schema::create('cars', function (Blueprint $table) {
                    $table->id();

                    $table->string('car_name');
                    $table->string('slug')->unique();
                    $table->string('car_image')->nullable();

                    $table->integer('passengers')->default(4);
                    $table->integer('bags')->default(2);

                    $table->string('ac_type')->nullable();
                    $table->string('fuel_type')->nullable();

                    $table->decimal('price_per_km', 10, 2)->nullable();
                    $table->decimal('base_fare', 10, 2)->nullable();

                    $table->text('description')->nullable();

                    $table->boolean('is_featured')->default(1);
                    $table->boolean('status')->default(1);

                    $table->integer('sort_order')->default(0);

                    $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
