<?php

namespace App\Services;

use App\Models\Estate\Estate;

class EstateService
{
    public static function getOptionsTemplate($estate)
    {
        // Парковка
        $count = 1;
        $options = [];
        switch ($estate->category) {
            case Estate::CATEGORIES['flats']['slug']: {
                // Мебель, ванная
                $count += 2;
                break;
            }
        }
        if ($estate->parking) {
            $options[] = [
                'name' => 'Паркинг',
                'value' => 'Да'
            ];
        }
        else {
            $options[] = [
                'name' => 'Паркинг',
                'value' => 'Нет'
            ];
        }

        if ($estate->floor) {
            $options[] = [
                'name' => 'Этаж',
                'value' => $estate->floor
            ];
            $count++;
        }
        if ($estate->floors) {
            $options[] = [
                'name' => 'Этажность',
                'value' => $estate->floors
            ];
            $count++;
        }
        if ($estate->area) {
            $options[] = [
                'name' => 'Площадь',
                'value' => $estate->area
            ];
            $count++;
        }
        if ($estate->living_area) {
            $options[] = [
                'name' => 'Жилая площадь',
                'value' => $estate->living_area
            ];
            $count++;
        }
        if ($estate->room_size) {
            $options[] = [
                'name' => 'Комнатность',
                'value' => $estate->room_size
            ];
            $count++;
        }
        if ($estate->facing) {
            $options[] = [
                'name' => 'Облицовка',
                'value' => $estate->facing
            ];
            $count++;
        }
        if ($estate->condition) {
            $options[] = [
                'name' => 'Состояние',
                'value' => $estate->condition
            ];
            $count++;
        }
        if ($estate->year) {
            $options[] = [
                'name' => 'Год постройки',
                'value' => $estate->year
            ];
            $count++;
        }
        if ($estate->wall_material) {
            $options[] = [
                'name' => 'Материал стен',
                'value' => $estate->wall_material
            ];
            $count++;
        }
        if ($estate->ceiling_height) {
            $options[] = [
                'name' => 'Высота потолков',
                'value' => $estate->ceiling_height
            ];
            $count++;
        }

        // Мебель
        if ($estate->furniture) {
            $options[] = [
                'name' => 'Мебель',
                'value' => 'Да'
            ];
        }
        else {
            $options[] = [
                'name' => 'Мебель',
                'value' => 'Нет'
            ];
        }

        // Санузел
        if ($estate->bathroom) {
            $options[] = [
                'name' => 'Санузел',
                'value' => 'Да'
            ];
        }
        else {
            $options[] = [
                'name' => 'Санузел',
                'value' => 'Нет'
            ];
        }


        $rowsInCols = $count / 2;
        if (is_float($rowsInCols)) {
            $rowsInCols = ceil($rowsInCols);
            $leftOffset = $rowsInCols;
            $rightOffset = $rowsInCols - 1;
        }
        else {
            $leftOffset = $rowsInCols;
            $rightOffset = $rowsInCols;
        }

        $firstCol = array_slice($options, 0, $leftOffset);
        $secondCol = array_slice($options, $rightOffset);

        $html = view('components.render.estates.options', compact(
            'count', 'firstCol', 'secondCol')
        )->render();
        return $html;
    }
}
