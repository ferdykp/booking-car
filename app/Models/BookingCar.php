<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingCar extends Model
{
    use HasFactory;

    // Allow mass assignment for the following attributes
    protected $fillable = ['customer', 'no_hp', 'rent_start', 'rent_end'];
}
