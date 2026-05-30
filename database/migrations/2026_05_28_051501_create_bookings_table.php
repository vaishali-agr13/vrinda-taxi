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
            Schema::create('bookings', function (Blueprint $table) {
                $table->id();

                $table->string('name');
                $table->string('phone');
                $table->string('email')->nullable();

                $table->string('pickup_location');
                $table->string('drop_location');

                $table->date('ride_date')->nullable();
                $table->time('ride_time')->nullable();
                $table->date('return_date')->nullable();


                $table->string('vehicle_type')->nullable(); // sedan/suv etc

                $table->text('note')->nullable();

                $table->enum('status', ['pending', 'confirmed', 'cancelled'])
                    ->default('pending');

                $table->timestamps();

                $table->enum('trip_type', ['one_way', 'round_trip', 'local'])

                        ->default('one_way');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
