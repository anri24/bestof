<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Http\Resources\PropertyResource;
use App\Repositories\PropertyRepositoryInterface;
use App\Services\PropertyService;

class PropertyController extends Controller
{
    public function __construct(
        private readonly PropertyRepositoryInterface $repository,
        private readonly PropertyService $service,
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

    public function store(PropertyRequest $request)
    {
        return $this->service->store($request->validated(),$this->repository);
    }

    public function edit($id)
    {
        return PropertyResource::make($this->repository->findById($id));
    }

    public function update(PropertyRequest $request,$id)
    {
        return $this->repository->update($request->validated(),$id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function userIndex($catId)
    {
        return $this->repository->getUserHome($catId);
    }
}
