<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Booking extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'phone_number',
        'instagram',
        'email',
        'package_id',
        'booking_date',
        'status',
        'available',
        'unavailable',
        'estimated_completion',
        'price'
    ];

    protected $casts = [
        'booking_date' => 'date',
        'available' => 'datetime',
        'unavailable' => 'datetime',
        'estimated_completion' => 'datetime',
    ];

    /**
     * Relasi ke Package (Paket yang dipesan).
     */
    public function package(): ?BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    /**
     * Relasi ke Venue (Tempat acara).
     */
    public function venue(): ?BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }

    /**
     * Relasi ke Payment (Pembayaran terkait booking ini).
     */
    public function payment(): ?HasOne
    {
        return $this->hasOne(Payment::class);
    }

    /**
     * Relasi ke BookingDetails (Detail booking seperti venue & package).
     */
    public function details(): HasMany
    {
        return $this->hasMany(BookingDetail::class);
    }

    /**
     * Relasi ke EmailNotification (Notifikasi booking via email).
     */
    public function notifications(): HasMany
    {
        return $this->hasMany(EmailNotification::class);
    }

    /**
     * Set default status booking jika belum diisi.
     */
    public function setStatusAttribute($value): void
    {
        $this->attributes['status'] = $value ?? 'pending';
    }

    /**
     * Akses format tanggal booking dalam format "d M Y".
     */
    public function getFormattedBookingDateAttribute(): string
    {
        return Carbon::parse($this->booking_date)->format('d M Y');
    }
}
