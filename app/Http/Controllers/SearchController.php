<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Film::where('title', 'LIKE', "%{$query}%")->get(); // Sesuaikan logika pencarian dengan kebutuhan Anda

        return view('search_results', compact('results'));
    }
}
