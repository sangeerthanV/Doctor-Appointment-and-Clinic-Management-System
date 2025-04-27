@extends('layouts.app')

@section('content')
    <h1>Book Appointment</h1>

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <label for="doctor_id">Choose Doctor:</label>
        <select name="doctor_id" id="doctor_id">
            @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialization }}</option>
            @endforeach
        </select>

        <label for="appointment_date">Choose Date:</label>
        <input type="date" name="appointment_date" id="appointment_date" required>

        <button type="submit">Book Appointment</button>
    </form>
@endsection
