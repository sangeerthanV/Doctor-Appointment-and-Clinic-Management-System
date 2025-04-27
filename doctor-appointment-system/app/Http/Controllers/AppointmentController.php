<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    // Display a list of appointments (For patients)
    public function index()
    {
        $doctors = Doctor::all();  // Get all doctors
        return view('appointments.index', compact('doctors'));
    }

    // Store a new appointment (For patients)
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_time' => 'required|date',
        ]);

        // Create a new appointment for the logged-in user
        Appointment::create([
            'user_id' => Auth::id(),
            'doctor_id' => $request->doctor_id,
            'appointment_time' => $request->appointment_time,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    }
}
