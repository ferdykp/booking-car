<?php

namespace App\Http\Controllers;

use App\Models\BookingCar;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller;

class BookingCarController extends Controller
{
    // public function __construct(){
    // $this->middleware('auth')->only(['store', 'create']); // Hanya untuk rute tertentu
    // }

    public function create(): View {
        return view('booking.booking');
    }

    /**
     * Store a new booking in the database.
     */
    public function store(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'customer' => 'required|string|max:255',
            'no_hp' => 'required|string|max:13',
            'rent_start' => 'required|date',
            'rent_end' => 'required|date|after_or_equal:rent_start',
        ]);

        // Store booking details in the database
        BookingCar::create($validated);

        // Redirect back to the form with a success message
        return redirect()->route('booking.create')->with('success', 'Booking has been successfully submitted!');

    }
}
