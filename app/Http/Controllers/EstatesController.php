<?php

namespace App\Http\Controllers;

use App\Models\Estate\Estate;
use App\Services\EstateService;
use Illuminate\Http\Request;

class EstatesController extends Controller
{
    public function show($category, $id, Request $request)
    {
        $esCategoryExists = array_key_exists($category, Estate::CATEGORIES);
        if (!$esCategoryExists) {
            abort(404);
        }
        $esCategory = (object)Estate::CATEGORIES[$category];
        $estate = Estate::where('category', $category)
            ->where('id', $id)
            ->with(['photos'])
            ->first();
        if (!$estate) {
            abort(404);
        }
        $estate->info = "";
        if ($estate->room_size) {
            $estate->info .= $estate->room_size . "-комн. квартира, ";
        }
        if ($estate->area) {
            $estate->info .= $estate->area . "м<sup style='vertical-align: sub'>2</sup>, ";
        }
        if ($estate->floor) {
            $estate->info .= $estate->floor;
            if ($estate->floors) {
                $estate->info .= "/" . $estate->floors;
            }
            $estate->info .= " этаж";
        }
        $estate->info = trim(trim($estate->info, ' '), ',');
        $estate->options = EstateService::getOptionsTemplate($estate);


        return view('estates.show', compact('esCategory', 'estate'));
    }

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
        $estates = Estate::where('category', $esCategory->slug)->where('status', 1);

        if ($request->input('room_size')) {
            $roomSize = $request->input('room_size');
            if ($roomSize != -1) {
                $estates->where('room_size', $roomSize);
            }
        }
        if ($request->input('district')) {
            $district = $request->input('district');
            if ($district != -1) {
                $estates->where('district_id', $district);
            }
        }
        if ($request->input('city')) {
            $city = $request->input('room_size');
            if ($city != -1) {
                $estates->where('city_id', $city);
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
