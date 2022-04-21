<?php

namespace App\Http\Requests\Estates;

use Illuminate\Foundation\Http\FormRequest;

class SubmitStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'price' => ['numeric', 'nullable'],
            'area' => ['numeric', 'nullable'],
            'floor' => ['numeric', 'nullable'],
            'floors' => ['numeric', 'nullable'],
            'street' => ['string', 'nullable'],
            'house_number' => ['numeric', 'nullable'],
            'room_number' => ['numeric', 'nullable'],
            'owner_name' => ['string', 'nullable'],
            'owner_phone' => ['string', 'nullable'],
            'description' => ['string', 'nullable'],

            'living_area' => ['numeric', 'nullable'],
            'kitchen_area' => ['numeric', 'nullable'],
            'year' => ['numeric', 'nullable'],
            'ceiling_height' => ['numeric', 'nullable'],
        ];
    }

    protected function prepareForValidation()
    {
        $price = $this->request->get('price');
        $area = $this->request->get('area');
        $livingArea = $this->request->get('living_area');
        $kitchenArea = $this->request->get('kitchen_area');
        $ceilingHeight = $this->request->get('ceiling_height');
        $roomNumber = $this->request->get('room_number');
        $houseNumber = $this->request->get('house_number');
        $floor = $this->request->get('floor');
        $floors = $this->request->get('floors');
        $year = $this->request->get('year');


        $this->price = $price != "0" ? $price : null;
        $this->area = $area != "0" ? (double)$area : null;
        $this->living_area = $livingArea != "0" ? (double)$livingArea : null;
        $this->kitchen_area = $kitchenArea != "0" ? (double)$kitchenArea : null;
        $this->ceiling_height = $ceilingHeight != "0" ? (double)$ceilingHeight : null;
        $this->room_number = $roomNumber != "0" ? $roomNumber : null;
        $this->house_number = $houseNumber != "0" ? $houseNumber : null;
        $this->floor = $floor != "0" ? $floor : null;
        $this->floors = $floors != "0" ? $floors : null;
        $this->year = $year != "0" ? $year : null;


        $this->merge([
            'price' => $this->price,
            'area' => $this->area,
            'living_area' => $this->living_area,
            'kitchen_area' => $this->kitchen_area,
            'ceiling_height' => $this->ceiling_height,
            'room_number' => $this->room_number,
            'house_number' => $this->house_number,
            'floor' => $this->floor,
            'floors' => $this->floors,
            'year' => $this->year,
        ]);
    }
}
