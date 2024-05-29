<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'Nomclient' => 'John Doe',
            'date_debut' => '2024-06-01',
            'date_fin' => '2024-06-05',
            'numero_chambre' => '101',
            'prix' => '150.00',
            'status' => 'confirmed',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('reservations')->insert([
            'Nomclient' => 'Jane Smith',
            'date_debut' => '2024-07-10',
            'date_fin' => '2024-07-15',
            'numero_chambre' => '202',
            'prix' => '200.00',
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
}
}
