<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
{
    if (!auth()->check()) {
        return redirect()->route('home')->with('error', 'You are not sign in, you neet to login first');
    }

    $request->validate([
        'appointment_date' => 'required|date',
        'reason' => 'required|string',
    ]);

    Appointment::create([
        'user_id' => auth()->id(),
        'appointment_date' => $request->appointment_date,
        'reason' => $request->reason,
    ]);

    return redirect()->back()->with('success', 'Appointment submitted successfully.');
}

}
