<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'title' => 'required',
            'description' => 'sometimes',
            'price_type' => 'required',
            'price' => 'required',
            'property_type' => 'required_if:category_id,1',
            'deal_type' => 'required_if:category_id,1',
            'property_status' => 'required_if:category_id,1',
            'city' => 'required_if:category_id,1',
            'address' => 'required_if:category_id,1',
            'ceiling_height' => 'required_if:category_id,1',
            'space' => 'required_if:category_id,1',
            'all_floor' => 'required_if:category_id,1',
            'floor' => 'required_if:category_id,1',
            'rooms' => 'required_if:category_id,1',
            'bedroom' => 'required_if:category_id,1',
            'wet_point' => 'required_if:category_id,1',
            'acceptable_space' => 'required_if:category_id,1',
            'acceptable_type' => 'required_if:category_id,1',

            'loji_space' => 'sometimes',
            'balcony_space' => 'sometimes',
            'balcony_type' => 'sometimes',
            'veranda_space' => 'sometimes',
            'storeroom_space' => 'sometimes',
            'storeroom_type' => 'sometimes',
            'parking_type' => 'sometimes',
            'pool_type' => 'sometimes',
            'hot_water_type' => 'sometimes',
            'heating_type' => 'sometimes',
            'electricity' => 'sometimes',
            'is_fireplace' => 'sometimes',
            'is_gas' => 'sometimes',
            'is_alarm' => 'sometimes',
            'is_passenger_elevator' => 'sometimes',
            'is_freight_elevator' => 'sometimes',
            'is_internet' => 'sometimes',
            'is_furniture' => 'sometimes',
            'is_phone' => 'sometimes',
            'is_tv' => 'sometimes',
            'is_air_conditioner' => 'sometimes',
            'is_fridge' => 'sometimes',
            'is_washing_machine' => 'sometimes',
            'is_dishwasher' => 'sometimes',
            'is_oven' => 'sometimes',
        ];
    }
}
