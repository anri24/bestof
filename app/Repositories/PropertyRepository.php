<?php

namespace App\Repositories;

use App\Models\Property;

class PropertyRepository implements PropertyRepositoryInterface
{
    public function __construct(
       private readonly Property $model
    ){}

    public function getAll()
    {
        return $this->model::query()->orderBy('id','DESC')->get();
    }

    public function findById($id)
    {
        return $this->model::query()->findOrFail($id);
    }

    public function create($data)
    {
        return $this->model::create($data);
    }

    public function update($data, $id)
    {
        return $this->findById($id)->update($data);
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }

    public function getUserHome($limit)
    {
        return $this->model::query()->orderBy('id','DESC')->limit($limit)->get();
    }
}
