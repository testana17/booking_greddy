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
            $table->string('name'); // Nama pelanggan
            $table->string('phone_number'); // Nomor HP
            $table->string('instagram')->nullable(); // Instagram (opsional)
            $table->string('email')->nullable(); // Email (opsional)
            $table->foreignUuid('package_id')->constrained('packages')->onDelete('cascade'); // Relasi ke packages
            $table->date('booking_date');
            $table->timestamp('available')->nullable(); // Waktu mulai booking
            $table->timestamp('unavailable')->nullable(); // Waktu terakhir booking harus selesai
            $table->timestamp('estimated_completion')->nullable(); // Perkiraan waktu selesai
            $table->string('status')->default('pending'); // Status booking
            $table->decimal('price', 10, 2);
            $table->timestamps(); // created_at dan updated_at otomatisdated_at otomatis
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
