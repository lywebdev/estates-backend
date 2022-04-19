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
            'location'    => ['string', 'nullable'],
            'area'        => ['numeric', 'nullable'],
            'condition'   => ['string', 'nullable'],
            'parking'     => ['boolean'],
            'sold'        => ['boolean'],
            'district_id' => ['numeric', 'nullable'],
            'city_id'     => ['numeric', 'nullable'],
        ];

        switch ($this->category) {
            case Estate::CATEGORIES['flats']['slug']: {
                $rules = array_merge($rules, [
                    'living_area'    => ['numeric', 'nullable'],
                    'room_size'      => ['numeric', 'nullable'],
                    'facing'         => ['string', 'nullable'],
                    'floor'          => ['numeric', 'nullable'],
                    'floors'         => ['numeric', 'nullable'],
                    'year'           => ['numeric', 'nullable'],
                    'wall_material'  => ['string', 'nullable'],
                    'ceiling_height' => ['nullable'],
                    'furniture'      => ['boolean'],
                    'bathroom'       => ['boolean'],
                ]);
                break;
            }
        }


        return $rules;
    }

    protected function prepareForValidation()
    {
        $this->parking  = $this->request->get('parking') ? true : false;
        $this->sold     = $this->request->get('sold') ? true : false;
        $this->flat     = $this->request->get('flats');
        $this->city_id     = $this->request->get('city_id');
        $this->district_id = $this->request->get('district_id');
        if ($this->city_id == -1) {
            $this->city_id = null;
        }
        if ($this->district_id == -1) {
            $this->district_id = null;
        }

        if ($this->category == Estate::CATEGORIES['flats']['slug']) {
            $this->flat['furniture'] = isset($this->flat['furniture']) ? true : false;
            $this->flat['bathroom']  = isset($this->flat['bathroom']) ? true : false;

            $this->merge([
                'furniture'      => $this->flat['furniture'],
                'bathroom'       => $this->flat['bathroom'],
                'living_area'    => $this->flat['living_area'],
                'room_size'      => $this->flat['room_size'],
                'facing'         => $this->flat['facing'],
                'floor'          => $this->flat['floor'],
                'floors'         => $this->flat['floors'],
                'year'           => $this->flat['year'],
                'wall_material'  => $this->flat['wall_material'],
                'ceiling_height' => $this->flat['ceiling_height'],
            ]);
        }

        $this->merge([
            'parking' => $this->parking,
            'sold' => $this->sold,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id
        ]);
    }
}
