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
        $this->name = $request->name;
        $this->type = $request->type;
        $this->district = $request->district;
        $this->area = $request->area;
        $this->living_area = $request->living_area;
        $this->room_size = $request->room_size;
        $this->facing = $request->facing;
        $this->floor = $request->floor;
        $this->year = $request->year;
        $this->wall_material = $request->wall_material;
        $this->ceiling_height = $request->ceiling_height;
        $this->parking = $request->parking;
        $this->furniture = $request->furniture;
        $this->bathroom = $request->bathroom;
        $this->sold = $request->sold;


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
            'name' => ['required', 'string'],
            'category' => ['required', 'string'],
            'price' => ['numeric', 'nullable'],
//            'estate_category_id' => ['nullable', 'exists:estates_categories,id'],
            'location'  => ['string', 'nullable'],
            'area' => ['numeric', 'nullable'],
            'condition' => ['string', 'nullable'],
            'parking' => ['boolean'],
            'sold' => ['boolean'],
        ];

        switch ($this->type) {
            case Estate::TYPES['flat']: {
                $rules = array_merge($rules, [
                    'flat.district' => ['string', 'nullable'],
                    'flat.living_area' => ['numeric', 'nullable'],
                    'flat.room_size' => ['numeric', 'nullable'],
                    'flat.facing' => ['string', 'nullable'],
                    'flat.floor' => ['numeric', 'nullable'],
                    'flat.floors' => ['numeric', 'nullable'],
                    'flat.year' => ['numeric', 'nullable'],
                    'flat.wall_material' => ['string', 'nullable'],
                    'flat.ceiling_height' => ['nullable'],
                    'flat.furniture' => ['boolean'],
                    'flat.bathroom' => ['boolean'],
                ]);
                break;
            }
        }

        return $rules;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'parking' => $this->parking ? 1 : 0,
            'furniture' => $this->furniture ? 1 : 0,
            'bathroom' => $this->bathroom ? 1 : 0,
            'sold' => $this->sold ? 1 : 0
        ]);
    }
}
