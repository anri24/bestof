<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('property_type')->nullable();
            $table->integer('deal_type')->nullable();
            $table->string('property_status')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->float('ceiling_height')->nullable();
            $table->float('space')->nullable();
            $table->integer('all_floor')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('wet_point')->nullable();
            $table->float('acceptable_space')->nullable();
            $table->string('acceptable_type')->nullable();
            $table->float('loji_space')->nullable();
            $table->float('balcony_space')->nullable();
            $table->string('balcony_type')->nullable();
            $table->float('veranda_space')->nullable();
            $table->float('storeroom_space')->nullable();
            $table->string('storeroom_type')->nullable();
            $table->string('parking_type')->nullable();
            $table->string('pool_type')->nullable();
            $table->string('hot_water_type')->nullable();
            $table->string('heating_type')->nullable();
            $table->string('electricity')->nullable();
            $table->string('is_fireplace')->nullable();
            $table->string('is_gas')->nullable();
            $table->string('is_alarm')->nullable();
            $table->string('is_passenger_elevator')->nullable();
            $table->string('is_freight_elevator')->nullable();
            $table->string('is_internet')->nullable();
            $table->string('is_furniture')->nullable();
            $table->string('is_phone')->nullable();
            $table->string('is_tv')->nullable();
            $table->string('is_air_conditioner')->nullable();
            $table->string('is_fridge')->nullable();
            $table->string('is_washing_machine')->nullable();
            $table->string('is_dishwasher')->nullable();
            $table->string('is_oven')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
