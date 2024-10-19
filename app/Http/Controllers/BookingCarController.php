<?php

namespace App\Http\Controllers;

use App\Models\BookingCar;
use Illuminate\Http\Request;

class BookingCarController extends Controller
{
    public function index()
    {
// Return the create booking view located in auth directory
return view('auth.booking');    }

    /**
     * Simpan booking baru ke database.
     */
    public function store(Request $request)
    {
        // Validate and store booking details
        $validated = $request->validate([
            'customer' => 'required|string|max:255',
            'no_hp' => 'required|string|max:13',
            'rent_start' => 'required|date',
            'rent_end' => 'required|date|after_or_equal:rent_start',
        ]);

        // Store booking details in the database
        BookingCar::create($validated);

        return redirect()->route('booking.index')->with('success', 'Booking successfully created!');
    }
}
