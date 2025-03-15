<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome (Untuk Icon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body id="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">Laravel</a>

            <!-- Tombol Hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Menu Kiri -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tickets.index') }}">Tickets</a>
                    </li>
                </ul>

                <!-- Menu Kanan -->
                @include('layouts.navigation')
            </div>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Dark Mode Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.getElementById("toggle-dark-mode");
            const body = document.getElementById("body");
            const icon = document.getElementById("dark-mode-icon");

            // Cek mode sebelumnya dari localStorage
            if (localStorage.getItem("darkMode") === "enabled") {
                body.classList.add("dark-mode");
                icon.classList.replace("fa-moon", "fa-sun");
            }

            toggleButton.addEventListener("click", function () {
                body.classList.toggle("dark-mode");

                if (body.classList.contains("dark-mode")) {
                    localStorage.setItem("darkMode", "enabled");
                    icon.classList.replace("fa-moon", "fa-sun");
                } else {
                    localStorage.setItem("darkMode", "disabled");
                    icon.classList.replace("fa-sun", "fa-moon");
                }
            });
        });
    </script>
</body>
</html>
