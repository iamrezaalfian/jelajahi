<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    public function run()
    {
        // Generate 50 fake ticket records
        Ticket::factory()->count(50)->create();
    }
}
