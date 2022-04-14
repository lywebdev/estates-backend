<?php

namespace App\Http\Controllers;

use App\Models\Estate\Estate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newEstates = Estate::select('id', 'price', 'room_size', 'area', 'floor', 'location')
            ->with(['photos' => function($q) {
                $q->orderBy('sort', 'asc');
            }])
            ->orderBy('id', 'desc')
            ->limit(8)
            ->get();

        return view('home', compact('newEstates'));
    }
}
