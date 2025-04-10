<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Payments extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'booking_id',
        'payment_type',
        'amount',
        'transaction_id',
        'status',
        'payment_details'
    ];

    protected $casts = [
        'payment_details' => 'array',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
