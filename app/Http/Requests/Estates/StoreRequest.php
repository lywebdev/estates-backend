<?php

namespace App\Http\Requests\Estates;

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
        $this->category = $request->category;
        $this->district = $request->district;
        $this->address = $request->address;
        $this->area = $request->area;
        $this->living_area = $request->living_area;
        $this->room_size = $request->room_size;
        $this->facing = $request->facing;
        $this->floor = $request->floor;
        $this->year = $request->year;
        $this->wall_material = $request->wall_material;
        $this->ceiling_height = $request->ceiling_height;
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
        return [
            'name' => ['required', 'string'],
            'category' => ['nullable', 'exists:estates_categories,id'],
            'district' => ['string', 'nullable'],
            'address'  => ['string', 'nullable'],
            'area' => ['numeric', 'nullable'],
            'living_area' => ['numeric', 'nullable'],
            'room_size' => ['numeric', 'nullable'],
            'facing' => ['string', 'nullable'],
            'floor' => ['numeric', 'nullable'],
            'condition' => ['string', 'nullable'],
            'year' => ['numeric', 'nullable'],
            'wall_material' => ['string', 'nullable'],
            'ceiling_height' => ['nullable'],
            'furniture' => ['boolean', 'nullable'],
            'parking' => ['boolean', 'nullable'],
            'bathroom' => ['boolean', 'nullable'],
            'sold' => ['boolean', 'nullable'],
        ];
    }
}
