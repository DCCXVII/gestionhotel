<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    public function index()
    {
        return view('pieces');
    }


    public function getPieces(Request $request)
    {
        $pieces = Piece::all();
        return view('/pieces', compact('pieces'));
    }
}
