@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Edit Ticket</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-4">
                <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="flight_number" class="form-label">Flight Number</label>
                        <input type="text" name="flight_number" id="flight_number" class="form-control" value="{{ $ticket->flight_number }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="departure_city" class="form-label">Departure City</label>
                        <input type="text" name="departure_city" id="departure_city" class="form-control" value="{{ $ticket->departure_city }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="arrival_city" class="form-label">Arrival City</label>
                        <input type="text" name="arrival_city" id="arrival_city" class="form-control" value="{{ $ticket->arrival_city }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="departure_date" class="form-label">Departure Date</label>
                        <input type="datetime-local" name="departure_date" id="departure_date" class="form-control" value="{{ $ticket->departure_date }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $ticket->price }}" step="0.01" required>
                    </div>

                    <!-- Tombol Back & Submit sejajar -->
                    <div class="d-flex gap-2">
                        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Ticket
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
