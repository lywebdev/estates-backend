<?php

namespace App\View\Composers;
use App\Models\Estate\Estate;
use Illuminate\View\View;

class EstatesCategoriesComposer
{
    public function compose(View $view)
    {
        $view->with('esCategories', Estate::CATEGORIES);
    }
}
