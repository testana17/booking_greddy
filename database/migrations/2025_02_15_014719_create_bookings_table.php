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
            $table->uuid('id')->primary();
            $table->string('invoice')->unique();
            $table->string('name');
            $table->string('phone_number');
            $table->string('instagram')->nullable();
            $table->string('email')->nullable();
            $table->foreignUuid('package_id')->constrained('packages')->onDelete('cascade');
            $table->date('booking_date');
            $table->time('booking_time')->nullable(); // Adding booking time
            $table->text('event_address')->nullable(); // Adding event address
            $table->timestamp('available')->nullable();
            $table->timestamp('unavailable')->nullable();
            $table->timestamp('estimated_completion')->nullable();
            $table->string('status_payment'); // 'partial', 'complete'
            $table->decimal('total_price', 10, 2); // Full price
            $table->decimal('deposit_amount', 10, 2)->nullable(); // Deposit amount paid
            $table->decimal('remaining_amount', 10, 2)->nullable(); // Remaining amount to pay
            $table->json('payment_info')->nullable();
            $table->json('payment_type')->nullable();
            $table->dateTime('succeeded_at')->nullable();
            $table->dateTime('full_payment_at')->nullable(); // When full payment completed
            $table->timestamps();
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
