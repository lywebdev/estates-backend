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
            'category' => ['string', 'required'],

            'price'  => ['numeric', 'nullable'],
            'area'   => ['numeric', 'nullable'],
            'acres'  => ['numeric', 'nullable'],
            'floor'  => ['numeric', 'nullable'],
            'floors' => ['numeric', 'nullable'],
            'street' => ['string', 'nullable'],
            'house_number' => ['numeric', 'nullable'],
            'room_number'  => ['numeric', 'nullable'],
            'owner_name'   => ['string', 'nullable'],
            'owner_phone'  => ['string', 'nullable'],
            'description'  => ['string', 'nullable'],
            'living_area'  => ['numeric', 'nullable'],
            'kitchen_area' => ['numeric', 'nullable'],
            'year' => ['numeric', 'nullable'],
            'ceiling_height' => ['numeric', 'nullable'],
            'room_size' => ['numeric', 'nullable'],

            'parking'   => ['boolean', 'nullable'],
            'furniture' => ['boolean', 'nullable'],
            'bathroom'  => ['boolean', 'nullable'],

            'condition_id' => ['numeric', 'nullable'],
            'city_id'      => ['numeric', 'nullable'],
            'district_id'  => ['numeric', 'nullable'],
            'wall_material_id' => ['numeric', 'nullable'],
            'purpose_id'  => ['numeric', 'nullable'],
            'bathroom_id' => ['numeric', 'nullable'],
            'sewage_id'   => ['numeric', 'nullable'],
        ];
    }

    protected function prepareForValidation()
    {
        $price = $this->request->get('price');
        $area  = $this->request->get('area');
        $acres  = $this->request->get('acres');
        $floor  = $this->request->get('floor');
        $floors = $this->request->get('floors');
        $street = $this->request->get('street');
        $houseNumber = $this->request->get('house_number');
        $roomNumber  = $this->request->get('room_number');
        $ownerName   = $this->request->get('owner_name');
        $ownerPhone  = $this->request->get('owner_phone');
        $livingArea    = $this->request->get('living_area');
        $kitchenArea   = $this->request->get('kitchen_area');
        $year   = $this->request->get('year');
        $ceilingHeight = $this->request->get('ceiling_height');
        $roomSize = $this->request->get('room_size');

        $price  = (isset($price) && $price != "0") ? (double)$price : null;
        $area   = (isset($area) && $area != "0") ? (double)$area : null;
        $acres  = (isset($acres) && $acres != "0") ? (double)$acres : null;
        $floor  = (isset($floor) && $floor != "0") ? $floor : null;
        $floors = (isset($floors) && $floors != "0") ? $floors : null;
        $street = (isset($street) && $street != "0") ? $street : null;
        $houseNumber = (isset($houseNumber) && $houseNumber != "0") ? $houseNumber : null;
        $roomNumber  = (isset($roomNumber) && $roomNumber != "0") ? $roomNumber : null;
        $ownerName = (isset($ownerName) && $ownerName != "0") ? $ownerName : null;
        $ownerPhone = (isset($ownerPhone) && $ownerPhone != "0") ? $ownerPhone : null;
        $livingArea  = (isset($livingArea) && $livingArea != "0") ? (double)$livingArea : null;
        $kitchenArea = (isset($kitchenArea) && $kitchenArea != "0") ? (double)$kitchenArea : null;
        $year   = (isset($year) && $year != "0") ? $year : null;
        $ceilingHeight = (isset($ceilingHeight) && $ceilingHeight != "0") ? (double)$ceilingHeight : null;
        $roomSize = (isset($roomSize) && $roomSize != "0") ? $roomSize : null;

        $parking   = $this->request->get('parking');
        $furniture = $this->request->get('furniture');
        $bathroom  = $this->request->get('bathroom');

        $parking   = (isset($parking) && $parking != "false") ? true : false;
        $furniture = (isset($furniture) && $furniture != "false") ? true : false;
        $bathroom  = (isset($bathroom) && $bathroom != "false") ? true : false;

        $condition_id = $this->request->get('condition_id');
        $city_id = $this->request->get('city_id');
        $district_id = $this->request->get('district_id');
        $wall_material_id = $this->request->get('wall_material_id');
        $purpose_id  = $this->request->get('purpose_id');
        $bathroom_id = $this->request->get('bathroom_id');
        $sewage_id   = $this->request->get('sewage_id');

        $condition_id = (isset($condition_id) && $condition_id != -1) ? $condition_id : null;
        $city_id = (isset($city_id) && $city_id != -1) ? $city_id : null;
        $district_id = (isset($district_id) && $district_id != -1) ? $district_id : null;
        $wall_material_id = (isset($wall_material_id) && $wall_material_id != -1) ? $wall_material_id : null;
        $purpose_id  = (isset($purpose_id) && $purpose_id != -1) ? $purpose_id : null;
        $bathroom_id = (isset($bathroom_id) && $bathroom_id != -1) ? $bathroom_id : null;
        $sewage_id   = (isset($sewage_id) && $sewage_id != -1) ? $sewage_id : null;


        $this->merge([
            'price'  => $price,
            'area'   => $area,
            'acres'  => $acres,
            'floor'  => $floor,
            'floors' => $floors,
            'street' => $street,
            'house_number' => $houseNumber,
            'room_number'  => $roomNumber,
            'owner_name'   => $ownerName,
            'owner_phone'  => $ownerPhone,
            'living_area'  => $livingArea,
            'kitchen_area' => $kitchenArea,
            'year'   => $year,
            'ceiling_height' => $ceilingHeight,
            'room_size' => $roomSize,

            'parking'   => $parking,
            'furniture' => $furniture,
            'bathroom'  => $bathroom,

            'condition_id' => $condition_id,
            'city_id' => $city_id,
            'district_id' => $district_id,
            'wall_material_id' => $wall_material_id,
            'purpose_id'  => $purpose_id,
            'bathroom_id' => $bathroom_id,
            'sewage_id'   => $sewage_id,
        ]);
    }
}
