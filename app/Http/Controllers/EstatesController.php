<?php

namespace App\Http\Controllers;

use App\Models\Estate\Category;
use App\Models\Estate\Estate;
use Illuminate\Http\Request;

class EstatesController extends Controller
{
    public function index()
    {
        return view('buildings');
    }

    public function category($slug, Request $request)
    {
        $esCategoryExists = array_key_exists($slug, Estate::CATEGORIES);
        if (!$esCategoryExists) {
            abort(404);
        }
        $esCategory = (object)Estate::CATEGORIES[$slug];
        $estates = Estate::where('category', $esCategory->slug);

        if ($request->input('room_size')) {
            $roomSize = $request->input('room_size');
            if ($roomSize != -1) {
                $estates->where('room_size', $request->input('room_size'));
            }
        }

        $estates = $estates->with([
            'photos' => function($q) {
                $q->orderBy('sort', 'asc');
                $q->limit(1);
            }
        ])->orderBy('id', 'desc')
        ->paginate(6);

        return view("estates." . $esCategory->slug, compact('esCategory', 'estates'));
    }
}
