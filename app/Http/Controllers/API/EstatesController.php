<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Estate\Category;
use App\Models\Estate\Estate;
use Illuminate\Http\Request;

class EstatesController extends BaseController
{
    public function __construct(Request $request)
    {
        if (!$request->ajax()) {
            return false;
        }
    }

    public function renderBuildingsCategory(Request $request)
    {
        $esCategory = Category::where('slug', $request->slug)->first();
        if (!$esCategory) {
            return $this->sendError('Category not found.');
        }
        $estates = Estate::where('estate_category_id', $esCategory->id);

        if (isset($request->options['roomSize'])) {
            $roomSize = $request->options['roomSize'];
            if ($roomSize != -1) {
                $estates->where('room_size', $request->options['roomSize']);
            }
        }

        $estates->with([
            'photos' => function($q) {
                $q->orderBy('sort', 'asc');
                $q->limit(1);
            },
            'category'
        ])
        ->orderBy('id', 'desc');

        $estates = $estates->paginate(6);
        $estates->setPath(route('buildingsCategory', $esCategory->slug));

        $html = view('components.ajax.estates.main-container', compact('esCategory', 'estates'))->render();
        return $this->sendResponse([
            'template' => $html,
        ], 'Successful.');
    }

    public function countOffers(Request $request)
    {
        $esCategory = Category::where('slug', $request->slug)->first();
        if (!$esCategory) {
            return $this->sendError('Category not found.');
        }
        $estates = Estate::where('estate_category_id', $esCategory->id);

        if (isset($request->options['roomSize'])) {
            $roomSize = $request->options['roomSize'];
            if ($roomSize != -1) {
                $estates->where('room_size', $request->options['roomSize']);
            }
        }

        $estatesCount = $estates->count();
        $template = "";
        if ($estatesCount == 0) {
            $template = "Предложения не найдены";
        }
        else {
            $template = "Показать $estatesCount " . trans_choice('estates/index.count_estates', $estatesCount, [], 'ru');
        }

        return $this->sendResponse([
            'template' => $template,
        ], 'Successful.');
    }
}
