<?php

namespace App\Http\Controllers;

use App\Models\Estate\Category;
use App\Models\Estate\Estate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $flatEstates = Estate::where('category', Estate::CATEGORIES['flats']['slug'])
            ->where('status', 1)
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
