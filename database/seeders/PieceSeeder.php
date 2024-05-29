<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Piece;

class PieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Piece::create([
            'numero_chambre' => 'Room 101',
            'type' => 'Single Room',
            'prix' => 80.00,
            'status' => 0,
            'image' => 'room101.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 102',
            'type' => 'Double Room',
            'prix' => 120.00,
            'status' => 1,
            'image' => 'room102.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 103',
            'type' => 'Suite',
            'prix' => 200.00,
            'status' => 0,
            'image' => 'room103.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 104',
            'type' => 'Single Room',
            'prix' => 75.00,
            'status' => 2,
            'image' => 'room104.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 105',
            'type' => 'Double Room',
            'prix' => 130.00,
            'status' => 0,
            'image' => 'room105.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 106',
            'type' => 'Suite',
            'prix' => 220.00,
            'status' => 1,
            'image' => 'room106.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 107',
            'type' => 'Single Room',
            'prix' => 85.00,
            'status' => 0,
            'image' => 'room107.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 108',
            'type' => 'Double Room',
            'prix' => 140.00,
            'status' => 2,
            'image' => 'room108.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 109',
            'type' => 'Suite',
            'prix' => 230.00,
            'status' => 0,
            'image' => 'room109.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 110',
            'type' => 'Single Room',
            'prix' => 90.00,
            'status' => 1,
            'image' => 'room110.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 111',
            'type' => 'Double Room',
            'prix' => 150.00,
            'status' => 0,
            'image' => 'room111.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 112',
            'type' => 'Suite',
            'prix' => 240.00,
            'status' => 2,
            'image' => 'room112.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 113',
            'type' => 'Single Room',
            'prix' => 95.00,
            'status' => 0,
            'image' => 'room113.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 114',
            'type' => 'Double Room',
            'prix' => 160.00,
            'status' => 1,
            'image' => 'room114.jpg',
        ]);

        Piece::create([
            'numero_chambre' => 'Room 115',
            'type' => 'Suite',
            'prix' => 250.00,
            'status' => 0,
            'image' => 'room115.jpg',
        ]);
    }
}
