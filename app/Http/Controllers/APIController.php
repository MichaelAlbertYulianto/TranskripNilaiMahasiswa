<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transkrip;

class APIController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $transkrips = Transkrip::where('NIM', 'like', '%' . $query . '%')
            ->orWhere('Nama', 'like', '%' . $query . '%')
            ->orWhere('IPK', 'like', '%' . $query . '%')->get();

        if ($transkrips->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Tidak ditemukan',
                'data' => null
            ], 200)->header('Access-Control-Allow-Origin', '*');
        } else {
            return response()->json([
                'status' => 'success',
                'message' => 'Data ditemukan',
                'data' => $transkrips
            ],200)->header('Access-Control-Allow-Origin', '*');
        }
    }
}
