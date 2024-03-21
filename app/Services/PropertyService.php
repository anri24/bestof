<?php

namespace App\Services;

use App\Models\PropertyDetail;

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
        PropertyDetail::query()->create($request);
    }
}
