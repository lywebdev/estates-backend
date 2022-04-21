<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Estate\Bathroom;
use App\Models\Estate\Condition;
use App\Models\Estate\Estate;
use App\Models\Estate\WallMaterial;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function submitForm($category, Request $request)
    {
        $esCategoryExists = array_key_exists($category, Estate::CATEGORIES);
        if (!$esCategoryExists) {
            abort(404);
        }
        $esCategory = (object)Estate::CATEGORIES[$category];

        $data = (object)[];
        if ($esCategory->slug == 'flats') {
            $data->districts = District::all();
            $data->conditions = Condition::all();
            $data->cities = City::all();
            $data->wall_materials = WallMaterial::all();
            $data->bathrooms = Bathroom::all();
        }
        $data = json_encode($data);


        return view("submit.$category", compact('esCategory', 'data'));
    }
}
