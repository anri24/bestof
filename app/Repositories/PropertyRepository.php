<?php

namespace App\Repositories;

use App\Models\Property;

class PropertyRepository implements PropertyRepositoryInterface
{
    public function __construct(
       private readonly Property $model
    ){}

    public function index()
    {
        return $this->model::query()->orderBy('id','DESC')->get();
    }

    public function show($id)
    {
        return $this->model::query()->findOrFail($id);
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store($data)
    {
        return $this->model::create($data);
    }

    public function update($data, $id)
    {
        return $this->model::query()->findOrFail($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model::query()->findOrFail($id)->delete();
    }

    public function userHome($limit)
    {
        return $this->model::query()->orderBy('id','DESC')->limit($limit)->get();
    }
}
