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
            $table->foreignId('property_id')->references('id')->on('properties')->cascadeOnDelete();
            $table->string('property_type')->nullable();
            $table->integer('deal_type_id')->nullable();
            $table->string('property_status')->nullable();
            $table->integer('city_id')->nullable();
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
            $table->boolean('is_loji')->default(false);
            $table->float('loji_space')->nullable();
            $table->boolean('is_balcony')->default(false);
            $table->float('balcony_space')->nullable();
            $table->string('balcony_type')->nullable();
            $table->boolean('is_veranda')->default(false);
            $table->float('veranda_space')->nullable();
            $table->boolean('is_storeroom')->default(false);
            $table->float('storeroom_space')->nullable();
            $table->string('storeroom_type')->nullable();
            $table->boolean('is_parking')->default(false);
            $table->string('parking_type')->nullable();
            $table->boolean('is_pool')->default(false);
            $table->string('pool_type')->nullable();
            $table->boolean('is_how_water')->default(false);
            $table->string('hot_water_type')->nullable();
            $table->boolean('is_heating')->default(false);
            $table->string('heating_type')->nullable();
            $table->boolean('electricity')->default(false);
            $table->boolean('is_fireplace')->default(false);
            $table->boolean('is_gas')->default(false);
            $table->boolean('is_alarm')->default(false);
            $table->boolean('is_passenger_elevator')->default(false);
            $table->boolean('is_freight_elevator')->default(false);
            $table->boolean('is_internet')->default(false);
            $table->boolean('is_furniture')->default(false);
            $table->boolean('is_phone')->default(false);
            $table->boolean('is_tv')->default(false);
            $table->boolean('is_air_conditioner')->default(false);
            $table->boolean('is_fridge')->default(false);
            $table->boolean('is_washing_machine')->default(false);
            $table->boolean('is_dishwasher')->default(false);
            $table->boolean('is_oven')->default(false);
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
