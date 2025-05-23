<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class BookingDetail extends Model
{
    use HasFactory, HasUuids;
    //
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'booking_id',
        'packages_id',
        'price',
        'quantity',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function package()
    {
        return $this->belongsTo(Packages::class, 'packages_id');
    }
}
