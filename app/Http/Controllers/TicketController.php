<?php

namespace App\Http\Controllers;

use App\Models\Ticket; // Import model Ticket
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Menampilkan daftar semua tiket.
     */
    public function index()
    {
        // Ambil semua data tiket dari database
        $tickets = Ticket::all();

        // Tampilkan view 'tickets.index' dan kirim data tiket ke view
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Menampilkan form untuk membuat tiket baru.
     */
    public function create()
    {
        // Tampilkan view 'tickets.create' untuk form pembuatan tiket
        return view('tickets.create');
    }

    /**
     * Menyimpan tiket baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'flight_number' => 'required',
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_date' => 'required|date',
            'arrival_date' => 'required|date',
            'price' => 'required|numeric',
            'available_seats' => 'required|integer',
        ]);

        // Simpan data tiket baru ke database
        Ticket::create($request->all());

        // Redirect ke halaman daftar tiket dengan pesan sukses
        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    /**
     * Menampilkan detail tiket tertentu.
     */
    public function show(Ticket $ticket)
    {
        // Tampilkan view 'tickets.show' dan kirim data tiket ke view
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Menampilkan form untuk mengedit tiket tertentu.
     */
    public function edit(Ticket $ticket)
    {
        // Tampilkan view 'tickets.edit' dan kirim data tiket ke view
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Memperbarui tiket tertentu di database.
     */
    public function update(Request $request, Ticket $ticket)
    {
        // Validasi input dari form
        $request->validate([
            'flight_number' => 'required',
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_date' => 'required|date',
            'arrival_date' => 'required|date',
            'price' => 'required|numeric',
            'available_seats' => 'required|integer',
        ]);

        // Perbarui data tiket di database
        $ticket->update($request->all());

        // Redirect ke halaman daftar tiket dengan pesan sukses
        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    /**
     * Menghapus tiket tertentu dari database.
     */
    public function destroy(Ticket $ticket)
    {
        // Hapus data tiket dari database
        $ticket->delete();

        // Redirect ke halaman daftar tiket dengan pesan sukses
        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
    }
    public function search(Request $request)
    {
        $departure_date = $request->input('departure_date');
        $tickets = Ticket::where('departure_date', $departure_date)->get();
        return view('tickets.index', compact('tickets'));
    }
}
