<?php

namespace App\Services;

use App\Http\Requests\PropertyRequest;
use App\Models\PropertyDetails;
use App\Repositories\PropertyRepositoryInterface;

class PropertyService
{
    public function __construct(
        private readonly PropertyRepositoryInterface $repository
    ){}
    public function store(PropertyRequest $request)
    {
        $val = $request->validated();
        $property = $this->repository->store($val);
        if ($property->category_id === 1){
            $val['property_id'] = $property->id;
            PropertyDetails::create($val);
        }
    }
}
