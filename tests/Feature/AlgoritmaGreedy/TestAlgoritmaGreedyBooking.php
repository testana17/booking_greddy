<?php

namespace Tests\Feature\AlgoritmaGreedy;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use App\Models\Booking;
use App\Models\Packages;
use App\Models\Venue;
use Carbon\Carbon;

class TestAlgoritmaGreedyBooking extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_allows_booking_if_time_slot_is_available()
    {
        DB::transaction(function () {
            // Membuat data package dan venue tanpa factory
            $package = Packages::create([
                'name' => 'Basic Package',
                'price' => 500000,
                'description' => 'sdffSSdf',
            ]);

            $venue = Venue::create([
                'name' => 'Studio B',
                'description' => 'Jakarta',
                'capacity' => 12,
            ]);

            $booking = Booking::create([
                'name' => 'Customer 1',
                'phone_number' => '08123456789',
                'instagram' => 'customer_ig',
                'email' => 'customer1@example.com',
                'package_id' => $package->id,
                'venue_id' => $venue->id,
                'booking_date' => Carbon::today(),
                'available' => Carbon::now()->addHours(1),
                'unavailable' => Carbon::now()->addHours(3),
                'estimated_completion' => Carbon::now()->addHours(2),
                'status' => 'confirmed',
            ]);

            $this->assertDatabaseHas('bookings', ['name' => 'Customer 1']);
        });
    }

    /** @test */
    public function it_disallows_booking_if_time_slot_is_taken()
    {
        DB::transaction(function () {
            $package = Packages::create([
                'name' => 'Basic Package',
                'price' => 500000,
                'description' => 'sdffdf',
            ]);

            $venue = Venue::create([
                'name' => 'Studio A',
                'description' => 'Jakarta',
                'capacity' => 12,
            ]);

            // Booking pertama
            Booking::create([
                'name' => 'Customer 1',
                'phone_number' => '08123456789',
                'instagram' => 'customer_ig',
                'email' => 'customer1@example.com',
                'package_id' => $package->id,
                'venue_id' => $venue->id,
                'booking_date' => Carbon::today(),
                'available' => Carbon::now()->addHours(1),
                'unavailable' => Carbon::now()->addHours(3),
                'estimated_completion' => Carbon::now()->addHours(2),
                'status' => 'confirmed',
            ]);

            // Booking kedua dalam slot yang sama (seharusnya gagal)
            $booking2 = Booking::make([
                'name' => 'Customer 2',
                'phone_number' => '08123456780',
                'instagram' => 'customer2_ig',
                'email' => 'customer2@example.com',
                'package_id' => $package->id,
                'venue_id' => $venue->id,
                'booking_date' => Carbon::today(),
                'available' => Carbon::now()->addHours(1),
                'unavailable' => Carbon::now()->addHours(3),
                'estimated_completion' => Carbon::now()->addHours(2),
                'status' => 'pending',
            ]);

            $this->assertFalse($this->isBookingAvailable($booking2));
        });
    }

    private function isBookingAvailable($newBooking)
    {
        return DB::transaction(function () use ($newBooking) {
            $existingBookings = Booking::where('venue_id', $newBooking->venue_id)
                ->where('booking_date', $newBooking->booking_date)
                ->get();

            foreach ($existingBookings as $booking) {
                if (!($newBooking->available >= $booking->unavailable || $newBooking->unavailable <= $booking->available)) {
                    return false;
                }
            }
            return true;
        });
    }
}
