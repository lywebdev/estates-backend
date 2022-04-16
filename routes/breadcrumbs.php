<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

//Breadcrumbs::for('');
/********************
 * Buildings
 *******************/
Breadcrumbs::for('home', function($trail) {
    $trail->push('Главная', route('home'));
});
Breadcrumbs::for('buildings.category', function($trail, $category) {
    $trail->parent('home');
    $trail->push($category->name);
});



/***********************************************************************************************************************
 *    admin
 **********************************************************************************************************************/
Breadcrumbs::for('admin.home', function($trail) {
    $trail->push('Админ-панель', route('admin.home'));
});

/********************
 * Estates
 *******************/
Breadcrumbs::for('admin.estates.index', function($trail) {
    $trail->parent('admin.home');
    $trail->push('Объекты недвижимости', route('admin.estates.index'));
});
Breadcrumbs::for('admin.estates.create', function($trail) {
    $trail->parent('admin.estates.index');
    $trail->push('Новый объект', route('admin.estates.create'));
});
Breadcrumbs::for('admin.estates.edit', function($trail, $estate) {
    $trail->parent('admin.estates.index');
    $trail->push("Редактирование " . $estate->name, route('admin.estates.edit', $estate->id));
});


/********************
 * EstatesCategories
 *******************/
Breadcrumbs::for('admin.estates-categories.index', function($trail) {
    $trail->parent('admin.home');
    $trail->push('Категории недвижимости', route('admin.estates-categories.index'));
});
Breadcrumbs::for('admin.estates-categories.create', function($trail) {
    $trail->parent('admin.estates.index');
    $trail->push('Новая категория', route('admin.estates-categories.create'));
});
Breadcrumbs::for('admin.estates-categories.edit', function($trail, $category) {
    $trail->parent('admin.estates.index');
    $trail->push("Редактирование " . $category->name, route('admin.estates-categories.edit', $category->id));
});
