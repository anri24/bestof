<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Repositories\CityRepositoryInterface;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct(
        private readonly CityRepositoryInterface $repository
    ){}
    public function index()
    {
        return response()->json($this->repository->getAll());
    }

    public function store(CityRequest $request)
    {
        return $this->repository->create($request->validated());
    }
    public function edit($id)
    {
        return response()->json($this->repository->findById($id));
    }

    public function update(CityRequest $request, $id)
    {
        return $this->repository->update($request->validated(),$id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

}
