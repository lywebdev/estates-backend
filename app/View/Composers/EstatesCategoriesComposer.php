<?php

namespace App\View\Composers;
use App\Models\Estate\Category;
use Illuminate\View\View;

class EstatesCategoriesComposer
{
    public function compose(View $view)
    {
        $view->with('esCategories', Category::all());
    }
}
