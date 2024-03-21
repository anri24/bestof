<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use HasFactory;

    protected $table = 'property_details';

    protected $fillable = [
        'property_id',
        'property_type',
        'deal_type_id',
        'property_status',
        'city_id',
        'address',
        'ceiling_height',
        'space',
        'all_floor',
        'floor',
        'rooms',
        'bedroom',
        'wet_point',
        'acceptable_space',
        'acceptable_type',
        'is_loji',
        'loji_space',
        'is_balcony',
        'balcony_space',
        'balcony_type',
        'is_veranda',
        'veranda_space',
        'is_storeroom',
        'storeroom_space',
        'storeroom_type',
        'is_parking',
        'parking_type',
        'is_pool',
        'pool_type',
        'is_how_water',
        'hot_water_type',
        'is_heating',
        'heating_type',
        'electricity',
        'is_fireplace',
        'is_gas',
        'is_alarm',
        'is_passenger_elevator',
        'is_freight_elevator',
        'is_internet',
        'is_furniture',
        'is_phone',
        'is_tv',
        'is_air_conditioner',
        'is_fridge',
        'is_washing_machine',
        'is_dishwasher',
        'is_oven',
    ];
}
