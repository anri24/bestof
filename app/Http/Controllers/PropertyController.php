<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Http\Resources\PropertyResource;
use App\Repositories\PropertyRepositoryInterface;
use App\Services\PropertyService;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function __construct(
        private readonly PropertyRepositoryInterface $repository
    )
    {}
    public function index()
    {
        return PropertyResource::collection($this->repository->index());
    }

    public function show($id)
    {
        return PropertyResource::make($this->repository->show($id));
    }

    public function store(PropertyRequest $request,PropertyService $service)
    {
        return $service->store($request);
    }

    public function update(PropertyRequest $request,$id)
    {
        return $this->repository->update($request->validated(),$id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
