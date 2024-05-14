<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'lastname' => 'Gil',
            'bankAccount' => 889309202,
            'address' => 'Cl 141 A #34-2',
            'phone' => 411597929,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('clientes')->insert([
            'lastname' => 'Cardona',
            'bankAccount' => 889309202,
            'address' => 'Cl 146 A #24-2',
            'phone' => 411597929,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'lastname' => 'Cantor',
            'bankAccount' => 889309202,
            'address' => 'Cl 142 A #35-2',
            'phone' => 411597929,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'lastname' => 'Duque',
            'bankAccount' => 889309202,
            'address' => 'Cl 141 A #11-6',
            'phone' => 411597929,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('clientes')->insert([
            'lastname' => 'Rojas',
            'bankAccount' => 889309202,
            'address' => 'Cl 145 A #12-2',
            'phone' => 411597929,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
