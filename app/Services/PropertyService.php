<?php

namespace App\Services;

use App\Models\PropertyDetails;

class PropertyService
{
    public function store(array $request,$repository)
    {
        $property = $repository->store($request);
        if ($property->category_id == 1){
            $request['property_id'] = $property->id;
            $this->storePropertyDetails($request);
        }

        return $property;
    }

    private function storePropertyDetails($request)
    {
        PropertyDetails::query()->create($request);
    }
}
