<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Estate\Estate;
use Illuminate\Http\Request;

class EstatesFiltersController extends BaseController
{
    public function __construct(Request $request)
    {
        if (!$request->ajax()) {
            return false;
        }
    }


    public function renderFiltersByCategory(Request $request)
    {
        $slug = $request->slug;
        $esCategory = (object)Estate::CATEGORIES[$slug];
        if (!$esCategory) {
            return $this->sendError('Category not found.');
        }
        $estatesCountByCategory = Estate::where('category', $slug)->count();
        $action = route("buildingsCategory", $slug);


        $html = view('components.ajax.filters.categories.' . $slug, compact('estatesCountByCategory'))->render();
        return $this->sendResponse([
            'template' => $html,
            'action' => $action
        ], 'Successful.');
    }
}
