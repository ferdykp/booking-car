<?php

namespace App\Http\Controllers;

use App\Models\BookingCar;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BookingCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("auth.booking");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("booking_car.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "customer"=> "required|string|max:25",
            "no_hp"=> "required|string|max:13|regex:/^\+?[0-9]{10,13}$/",
            "rent_start"=> "required|date|before:rent_end",
            "rent_end"=> "required|date|after:rent_start",
        ]);

        $booking = BookingCar::create($request->all());

        return redirect()->route("auth.home")->with("success","Booking Berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
