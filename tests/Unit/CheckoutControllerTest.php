<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Booking;
use App\Models\Packages;
use App\Models\Payments;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class CheckoutControllerTest extends TestCase
{
    // Siapkan data awal sebelum setiap test
    public function setUp(): void
    {
        parent::setUp();
        Mail::fake();
        Http::fake([
            '*' => Http::response([
                'token' => 'fake-token-123',
                'redirect_url' => 'https://example.com/redirect'
            ], 200)
        ]);
    }

    // Test untuk cek tanggal
    public function testCekTanggal()
    {
        // Buat booking sederhana
        $booking = new Booking();
        $booking->id = Str::uuid();
        $booking->package_id = 1;
        $booking->booking_date = '2025-05-01';
        $booking->status_payment = 'complete';
        $booking->save();

        // Test API
        $response = $this->getJson('/api/cektanggal/2025-05-01');
        $response->assertStatus(200);
        $response->assertJson(['is_available' => false]);
        
        // Test tanggal kosong
        $response = $this->getJson('/api/cektanggal/2025-05-02');
        $response->assertStatus(200);
        $response->assertJson(['is_available' => true]);
    }

    // Test untuk checkout dengan pembayaran penuh
    public function testCheckoutFullPayment()
    {
        // Buat package sederhana
        $package = new Packages();
        $package->id = 1;
        $package->name = 'Test Package';
        $package->price = 1000000;
        $package->save();

        // Data untuk checkout
        $requestData = [
            'full_name' => 'John Doe',
            'phone_number' => '081234567890',
            'instagram_username' => 'johndoe',
            'email' => 'john@example.com',
            'event_date' => '2025-06-15',
            'event_time' => '14:00',
            'package' => $package->id,
            'event_address' => '123 Main Street',
            'payment_type' => 'full',
            'payment_amount' => 1000000,
        ];

        // Test API checkout
        $response = $this->postJson('/api/checkout', $requestData);
        
        $response->assertStatus(200);
        $response->assertJsonStructure(['token']);
        
        // Cek database
        $this->assertDatabaseHas('bookings', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);
    }

    // Test untuk callback settlement
    public function testCallbackSettlement()
    {
        // Buat package
        $package = new Packages();
        $package->id = 1;
        $package->name = 'Test Package';
        $package->price = 500000;
        $package->save();

        // Buat booking
        $booking = new Booking();
        $booking->id = Str::uuid();
        $booking->invoice = 'INV-PHT-TESTINV';
        $booking->name = 'Test User';
        $booking->email = 'test@example.com';
        $booking->package_id = $package->id;
        $booking->total_price = 500000;
        $booking->status_payment = 'pending';
        $booking->payment_type = json_encode(['type' => 'full']);
        $booking->payment_info = json_encode([
            'token' => 'fake-token',
            'redirect_url' => 'https://example.com',
        ]);
        $booking->save();

        // Buat payment
        $payment = new Payments();
        $payment->id = Str::uuid();
        $payment->booking_id = $booking->id;
        $payment->payment_type = 'full';
        $payment->amount = 500000;
        $payment->status = 'pending';
        $payment->transaction_id = $booking->invoice;
        $payment->save();

        // Siapkan signature key
        $serverKey = config('services.midtrans.server_key', 'SB-Mid-server-YOUR-KEY-HERE');
        $signatureKey = hash('sha512', 'INV-PHT-TESTINV' . '200' . '500000.00' . $serverKey);

        // Buat notifikasi
        $notificationData = [
            'order_id' => 'INV-PHT-TESTINV',
            'status_code' => '200',
            'gross_amount' => '500000.00',
            'transaction_status' => 'settlement',
            'transaction_id' => 'trans-123',
            'signature_key' => $signatureKey
        ];

        // Test callback
        $response = $this->postJson('/api/callback', $notificationData);
        $response->assertStatus(200);
        
        // Cek status booking
        $this->assertDatabaseHas('bookings', [
            'invoice' => 'INV-PHT-TESTINV',
            'status_payment' => 'complete'
        ]);
    }

    // Test untuk halaman sukses
    public function testSuccessPage()
    {
        // Buat booking
        $booking = new Booking();
        $booking->id = Str::uuid();
        $booking->invoice = 'INV-PHT-SUCCESS';
        $booking->name = 'Success User';
        $booking->save();

        // Test halaman sukses
        $response = $this->get('/checkout/success?id=INV-PHT-SUCCESS');
        $response->assertStatus(200);
        $response->assertViewIs('success');
    }
}