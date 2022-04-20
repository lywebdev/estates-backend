<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'surname' => ['string', 'nullable'],
            'patronymic' => ['string', 'nullable'],
            'email' => ['string', 'required'],
            'tg_chat_id' => ['numeric', 'nullable'],
            'age' => ['numeric', 'nullable'],
            'gender' => ['string', 'nullable'],
            'auto' => ['boolean', 'nullable'],
//            'email' => ['required', 'string', 'max:255', 'exists:users'],
            'phone' => ['string', 'nullable'],
            'role' => ['string', 'required']
        ];
    }

    protected function prepareForValidation()
    {
        $this->gender = $this->request->get('gender');
        if ($this->gender == -1) {
            $this->gender = null;
        }


        $this->merge([
            'gender' => $this->gender
        ]);
    }
}
