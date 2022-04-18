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

    public function category($slug)
    {
        $esCategoryExists = array_key_exists($slug, Estate::CATEGORIES);
        if (!$esCategoryExists) {
            abort(404);
        }
        $esCategory = (object)Estate::CATEGORIES[$slug];
        $estates = Estate::where('category', $esCategory->slug)
            ->with([
                'photos' => function($q) {
                    $q->orderBy('sort', 'asc');
                    $q->limit(1);
                }
            ])->orderBy('id', 'desc')
            ->paginate(6);

        return view("estates." . $esCategory->slug, compact('esCategory', 'estates'));
    }
}
