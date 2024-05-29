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

    public function updatePieceStatus(Request $request)
    {
        $piece = Piece::find($request->id);
        $piece->status = $request->status;
        $piece->save();
        return response()->json(['success' => 'Status changed successfully.']);
    }
    
}
