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
        Schema::create('tour_management', function (Blueprint $table) {
            $table->id();

            $table->date('enquiry_date')->nullable();
            $table->string('client_name');
            $table->string('contact_number')->nullable();
            $table->string('client_city')->nullable();

            $table->text('package_details')->nullable();

            $table->date('trip_start_date')->nullable();
            $table->date('trip_end_date')->nullable();

            $table->string('pickup_location')->nullable();
            $table->time('pickup_time')->nullable();

            $table->string('drop_location')->nullable();
            $table->time('drop_time')->nullable();

            $table->integer('no_of_adults')->default(1);

            $table->string('car_type')->nullable();
            $table->decimal('car_charges_per_day',10,2)->nullable();

            $table->string('car_number')->nullable();

            $table->string('driver_name')->nullable();
            $table->string('driver_contact')->nullable();

            $table->string('hotel_room_type')->nullable();
            $table->decimal('hotel_charges',10,2)->nullable();

            $table->enum('guide_service',['Yes','No'])->default('No');
            $table->decimal('guide_charges',10,2)->nullable();

            $table->decimal('advance_payment_received',10,2)->nullable();
            $table->decimal('total_balance_amount',10,2)->nullable();

            $table->date('first_followup_date')->nullable();
            $table->date('second_followup_date')->nullable();
            $table->date('last_followup_date')->nullable();

            $table->enum('review',['Yes','No'])->nullable();
            $table->decimal('total_amount',10,2)->nullable();

            $table->enum('booking_status',[
                'Pending',
                'Confirmed',
                'In Progress',
                'Completed',
                'Cancelled'
            ])->default('Pending');

            $table->text('remarks')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_management');
    }
};
