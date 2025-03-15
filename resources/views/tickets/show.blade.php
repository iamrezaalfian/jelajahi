@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Ticket Details</h2>
            <ul class="list-group">
                <li class="list-group-item"><strong>Flight Number:</strong> {{ $ticket->flight_number }}</li>
                <li class="list-group-item"><strong>Departure City:</strong> {{ $ticket->departure_city }}</li>
                <li class="list-group-item"><strong>Arrival City:</strong> {{ $ticket->arrival_city }}</li>
                <li class="list-group-item"><strong>Departure Date:</strong> {{ $ticket->departure_date }}</li>
                <li class="list-group-item"><strong>Arrival Date:</strong> {{ $ticket->arrival_date }}</li>
                <li class="list-group-item"><strong>Price:</strong> ${{ number_format($ticket->price, 2) }}</li>
                <li class="list-group-item"><strong>Available Seats:</strong> {{ $ticket->available_seats }}</li>
            </ul>
            <div class="text-center mt-4">
                <a href="{{ route('tickets.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>
@endsection
