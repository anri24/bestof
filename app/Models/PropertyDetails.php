<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetails extends Model
{
    use HasFactory;

    protected $table = 'property_details';

    protected $fillable = [
        'property_id',
        'property_type',
        'deal_type',
        'property_status',
        'city',
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
        'loji_space',
        'balcony_space',
        'balcony_type',
        'veranda_space',
        'storeroom_space',
        'storeroom_type',
        'parking_type',
        'pool_type',
        'hot_water_type',
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
