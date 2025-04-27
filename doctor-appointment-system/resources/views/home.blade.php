<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment System</title>
    <!-- Add Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            margin-top: 100px;
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
            <h1 class="text-center mb-4">Welcome to the Doctor Appointment System</h1>
            <p class="text-center">Manage appointments and clinic information easily.</p>
            <div class="text-center">
                <a href="{{ route('appointments.index') }}" class="btn btn-primary btn-lg">Book Appointment</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
