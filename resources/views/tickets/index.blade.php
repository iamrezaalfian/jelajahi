@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Tickets</h1>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('tickets.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Ticket
        </a>

        <form action="{{ route('tickets.search') }}" method="GET" class="d-flex">
            <input type="date" name="departure_date" class="form-control me-2">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i> Search
            </button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped shadow">
            <thead class="table-dark">
                <tr>
                    <th>Flight Number</th>
                    <th>Departure City</th>
                    <th>Arrival City</th>
                    <th>Departure Date</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->flight_number }}</td>
                        <td>{{ $ticket->departure_city }}</td>
                        <td>{{ $ticket->arrival_city }}</td>
                        <td>{{ $ticket->departure_date }}</td>
                        <td>${{ number_format($ticket->price, 2) }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this ticket?');">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
