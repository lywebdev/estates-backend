<?php

namespace App\Http\Requests\Estates;

use App\Models\Estate\Estate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        $this->category = $request->category;

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'        => ['required', 'string'],
            'category'    => ['required', 'string'],
            'price'       => ['numeric', 'nullable'],
            'area'        => ['numeric', 'nullable'],
            'sold'        => ['boolean'],
            'year'        => ['numeric', 'nullable'],
            'description' => ['string', 'nullable'],

            'street'      => ['string', 'nullable'],
            'intersection_streets' => ['string', 'nullable'],
            'owner_name'  => ['string', 'nullable'],
            'owner_phone' => ['string', 'nullable'],

            'district_id'  => ['numeric', 'nullable'],
            'city_id'      => ['numeric', 'nullable'],
            'sell_variant_id' => ['numeric', 'nullable']
        ];

        switch ($this->category) {
            case Estate::CATEGORIES['flats']['slug']: {
                $rules = array_merge($rules, [
                    'living_area'    => ['numeric', 'nullable'],
                    'kitchen_area'   => ['numeric', 'nullable'],
                    'room_size'      => ['numeric', 'nullable'],
                    'facing'         => ['string', 'nullable'],
                    'floor'          => ['numeric', 'nullable'],
                    'floors'         => ['numeric', 'nullable'],
                    'ceiling_height' => ['numeric', 'nullable'],
                    'balcony'        => ['string', 'nullable'],
                    'house_number'   => ['string', 'nullable'],
                    'room_number'    => ['string', 'nullable'],

                    'bathroom_id'       => ['numeric', 'nullable'],
                    'wall_material_id'  => ['numeric', 'nullable'],
                    'furniture_id'      => ['numeric', 'nullable'],
                    'parking_id'        => ['numeric', 'nullable'],
                    'condition_id'      => ['numeric', 'nullable'],
                    'floor_covering_id' => ['numeric', 'nullable'],

                    'bathroom'  => ['boolean', 'nullable'],
                    'parking'   => ['boolean', 'nullable'],
                    'furniture' => ['boolean', 'nullable'],
                ]);
                break;
            }
            case Estate::CATEGORIES['regions']['slug']: {
                $rules = array_merge($rules, [
                    'acres'          => ['numeric', 'nullable'],
                    'living_area'    => ['numeric', 'nullable'],
                    'room_size'      => ['numeric', 'nullable'],
                    'floor'          => ['numeric', 'nullable'],
                    'floors'         => ['numeric', 'nullable'],
                    'ceiling_height' => ['numeric', 'nullable'],
                    'house_number'   => ['string', 'nullable'],

                    'purpose_id'        => ['numeric', 'nullable'],
                    'wall_material_id'  => ['numeric', 'nullable'],
                    'sewage_id'         => ['numeric', 'nullable'],
                    'bathroom_id'       => ['numeric', 'nullable'],
                    'condition_id'      => ['numeric', 'nullable'],

                    'furniture' => ['boolean', 'nullable'],
                    'parking'   => ['boolean', 'nullable'],
                ]);
                break;
            }
        }


        return $rules;
    }

    protected function prepareForValidation()
    {
        $merge = [];
        $this->category = $this->request->get('category');

        $this->sold = $this->request->get('sold') ? true : false;

        $this->flat = $this->request->get('flats');
        $this->region = $this->request->get('regions');

        $this->city_id     = $this->request->get('city_id');
        $this->district_id = $this->request->get('district_id');
        $this->sell_variant_id = $this->request->get('sell_variant_id');

        switch ($this->category) {
            case 'flats': {
                $this->bathroom_id = isset($this->flat['bathroom_id']) ? $this->flat['bathroom_id'] : -1;
                $this->wall_material_id = isset($this->flat['wall_material_id']) ? $this->flat['wall_material_id'] : -1;
                $this->furniture_id = isset($this->flat['furniture_id']) ? $this->flat['furniture_id'] : -1;
                $this->parking_id   = isset($this->flat['parking_id']) ? $this->flat['parking_id'] : -1;
                $this->condition_id = isset($this->flat['condition_id']) ? $this->flat['condition_id'] : -1;
                $this->floor_covering_id = isset($this->flat['floor_covering_id']) ? $this->flat['floor_covering_id'] : -1;
                break;
            }
            case 'regions': {
                $this->bathroom_id = isset($this->region['bathroom_id']) ? $this->region['bathroom_id'] : -1;
                $this->wall_material_id = isset($this->region['wall_material_id']) ? $this->region['wall_material_id'] : -1;
                $this->condition_id = isset($this->region['condition_id']) ? $this->region['condition_id'] : -1;
                $this->purpose_id = isset($this->region['purpose_id']) ? $this->region['purpose_id'] : -1;
                $this->sewage_id = isset($this->region['sewage_id']) ? $this->region['sewage_id'] : -1;
                break;
            }
        }

        if ($this->city_id == -1) {
            $this->city_id = null;
        }
        if ($this->district_id == -1) {
            $this->district_id = null;
        }
        if ($this->sell_variant_id == -1) {
            $this->sell_variant_id = null;
        }


        if ($this->bathroom_id == -1) {
            $this->bathroom_id = null;
        }
        if ($this->wall_material_id == -1) {
            $this->wall_material_id = null;
        }
        if ($this->furniture_id == -1) {
            $this->furniture_id = null;
        }
        if ($this->parking_id == -1) {
            $this->parking_id = null;
        }
        if ($this->condition_id == -1) {
            $this->condition_id = null;
        }
        if ($this->floor_covering_id == -1) {
            $this->floor_covering_id = null;
        }
        if ($this->purpose_id == -1) {
            $this->purpose_id = null;
        }
        if ($this->sewage_id == -1) {
            $this->sewage_id = null;
        }



        if ($this->category == 'flats') {
            $merge = array_merge($merge, [
                'wall_material_id'  => $this->wall_material_id,
                'furniture_id'      => $this->furniture_id,
                'parking_id'        => $this->parking_id,
                'floor_covering_id' => $this->floor_covering_id,
                'bathroom_id'       => $this->bathroom_id,
                'condition_id'      => $this->condition_id,

                'kitchen_area'   => isset($this->flat['kitchen_area']) ? $this->flat['kitchen_area'] : null,
                'facing'         => isset($this->flat['facing']) ? $this->flat['facing'] : null,
                'bathroom'       => isset($this->flat['bathroom']) ? true : false,
                'room_number'    => isset($this->flat['room_number']) ? $this->flat['room_number'] : null,
                'living_area'    => isset($this->flat['living_area']) ? $this->flat['living_area'] : null,
                'room_size'      => isset($this->flat['room_size']) ? $this->flat['room_size'] : null,
                'floor'          => isset($this->flat['floor']) ? $this->flat['floor'] : null,
                'floors'         => isset($this->flat['floors']) ? $this->flat['floors'] : null,
                'ceiling_height' => isset($this->flat['ceiling_height']) ? $this->flat['ceiling_height'] : null,
                'furniture'      => isset($this->flat['furniture']) ? true : false,
                'parking'        => isset($this->flat['parking']) ? true : false,
                'house_number'   => isset($this->flat['house_number']) ? $this->flat['house_number'] : null,
            ]);
        }

        if ($this->category == 'regions') {
            $merge = array_merge($merge, [
                'wall_material_id'  => $this->wall_material_id,
                'bathroom_id'       => $this->bathroom_id,
                'condition_id'      => $this->condition_id,
                'purpose_id'        => $this->purpose_id,
                'sewage_id'         => $this->sewage_id,

                'kitchen_area'   => isset($this->region['kitchen_area']) ? $this->region['kitchen_area'] : null,
                'living_area'    => isset($this->region['living_area']) ? $this->region['living_area'] : null,
                'room_size'      => isset($this->region['room_size']) ? $this->region['room_size'] : null,
                'floor'          => isset($this->region['floor']) ? $this->region['floor'] : null,
                'floors'         => isset($this->region['floors']) ? $this->region['floors'] : null,
                'ceiling_height' => isset($this->region['ceiling_height']) ? $this->region['ceiling_height'] : null,
                'furniture'      => isset($this->region['furniture']) ? true : false,
                'parking'        => isset($this->region['parking']) ? true : false,
                'house_number'   => isset($this->region['house_number']) ? $this->region['house_number'] : null,
            ]);
        }


        $merge = array_merge($merge, [
            'sold' => $this->sold,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id,
            'sell_variant_id' => $this->sell_variant_id,
        ]);
        $this->merge($merge);
    }
}
