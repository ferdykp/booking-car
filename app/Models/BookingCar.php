<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingCar extends Model
{
    use HasFactory;

    protected $table = 'booking_car'; // Menentukan nama tabel jika tidak mengikuti konvensi Laravel

    protected $fillable = [
        'customer',
        'no_hp',
        'rent_start',
        'rent_end',
    ];

    /**
     * Mutator untuk rent_start
     */
    public function setRentStartAttribute($value)
    {
        $this->attributes['rent_start'] = date('Y-m-d', strtotime($value));
    }

    /**
     * Mutator untuk rent_end
     */
    public function setRentEndAttribute($value)
    {
        $this->attributes['rent_end'] = date('Y-m-d', strtotime($value));
    }
}
