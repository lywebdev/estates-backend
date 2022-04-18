<?php

namespace App\Http\Controllers;

use App\Models\Estate\Category;
use App\Models\Estate\Estate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $flatEstates = Estate::select('id', 'category', 'price', 'room_size', 'area', 'floor', 'location')
            ->where('category', Estate::CATEGORIES['flats']['slug'])
            ->with([
                'photos' => function($q) {
                    $q->orderBy('sort', 'asc');
                }
            ])
            ->orderBy('id', 'desc')
            ->limit(8)
            ->get();

        return view('home', compact('flatEstates'));
    }
}
