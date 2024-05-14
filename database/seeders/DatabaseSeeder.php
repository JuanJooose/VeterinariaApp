<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //? Llamar el seeder con el comando sail artisan db:seed
        $this->call(EspecieSeeder::class);
        $this->call(CalendariovacunacionSeeder::class);
        $this->call(HistorialMedicoSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(MascotaSeeder::class);
    }
}
