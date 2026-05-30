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
        Schema::create('tour_itineraries', function (Blueprint $table) {

    $table->bigIncrements('id');

                $table->unsignedBigInteger('tour_package_id');

                $table->integer('day_number');

                $table->string('title');

                $table->longText('description')->nullable();

                $table->timestamps();

                $table->foreign('tour_package_id')
                    ->references('id')
                    ->on('tour_packages')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_itineraries');
    }
};
