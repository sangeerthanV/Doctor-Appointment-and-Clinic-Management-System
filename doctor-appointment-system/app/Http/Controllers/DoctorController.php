<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Admin only: show list of doctors
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    // Admin only: show doctor details
    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    // Admin only: create new doctor
    public function create()
    {
        return view('doctors.create');
    }

    // Admin only: store doctor details
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialization' => 'required',
        ]);

        Doctor::create($request->all());

        return redirect()->route('doctors.index');
    }
}
