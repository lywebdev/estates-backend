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

                    'bathroom' => ['boolean', 'nullable'],
                    'parking'  => ['boolean', 'nullable'],
                ]);
                break;
            }
        }


        return $rules;
    }

    protected function prepareForValidation()
    {
        $this->sold = $this->request->get('sold') ? true : false;

        $this->flat = $this->request->get('flats');
        $this->furniture = $this->request->get('furniture') ? true : false;
        $this->bathroom = $this->request->get('bathroom') ? true : false;
        $this->parking = $this->request->get('parking') ? true : false;

        $this->city_id     = $this->request->get('city_id');
        $this->district_id = $this->request->get('district_id');
        $this->sell_variant_id = $this->request->get('sell_variant_id');

        $this->bathroom_id = $this->request->get('bathroom_id');
        $this->wall_material_id = $this->request->get('wall_material_id');
        $this->furniture_id = $this->request->get('furniture_id');
        $this->parking_id   = $this->request->get('parking_id');
        $this->condition_id = $this->request->get('condition_id');
        $this->floor_covering_id = $this->request->get('sell_variant_id');

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



        if ($this->category == Estate::CATEGORIES['flats']['slug']) {
            $this->merge([
                'bathroom_id'       => $this->bathroom_id,
                'wall_material_id'  => $this->wall_material_id,
                'furniture_id'      => $this->furniture_id,
                'parking_id'        => $this->parking_id,
                'condition_id'      => $this->condition_id,
                'floor_covering_id' => $this->floor_covering_id,

                'living_area'    => $this->flat['living_area'],
                'kitchen_area'   => $this->flat['kitchen_area'],
                'room_size'      => $this->flat['room_size'],
                'facing'         => $this->flat['facing'],
                'floor'          => $this->flat['floor'],
                'floors'         => $this->flat['floors'],
                'ceiling_height' => $this->flat['ceiling_height'],
                'bathroom'       => $this->bathroom,
                'furniture'      => $this->furniture,
                'parking'        => $this->parking,
                'house_number'   => $this->house_number,
                'room_number'    => $this->room_number,
            ]);
        }

        $this->merge([
            'sold' => $this->sold,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id,
            'sell_variant_id' => $this->sell_variant_id,
        ]);
    }
}
