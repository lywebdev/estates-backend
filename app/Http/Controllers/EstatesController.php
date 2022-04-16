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
        $esCategory = Category::where('slug', $slug)->first();
        if (!$esCategory) {
            abort(404);
        }
        $estates = Estate::where('estate_category_id', $esCategory->id)
            ->with([
                'photos' => function($q) {
                    $q->orderBy('sort', 'asc');
                    $q->limit(1);
                },
                'category'
            ])->orderBy('id', 'desc')
            ->paginate(6);

        return view('buildings', compact('esCategory', 'estates'));
    }
}
