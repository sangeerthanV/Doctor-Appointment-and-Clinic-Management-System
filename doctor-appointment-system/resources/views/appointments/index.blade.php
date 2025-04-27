<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <!-- Add Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card shadow-lg p-5">
            <h1 class="text-center mb-4">Book Your Appointment</h1>

            <!-- Appointment Form -->
            <form action="{{ route('appointments.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="doctor" class="form-label">Select Doctor</label>
                    <select id="doctor" name="doctor_id" class="form-control" required>
                        <option value="">Select Doctor</option>
                        <!-- Assuming you have a list of doctors -->
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialization }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="appointment_date" class="form-label">Select Date and Time</label>
                    <input type="datetime-local" id="appointment_date" name="appointment_date" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Book Appointment</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
