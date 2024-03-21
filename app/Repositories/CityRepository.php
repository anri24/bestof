<?php

namespace App\Repositories;

use App\Models\City;

class CityRepository implements CityRepositoryInterface
{
    public function __construct(
        private readonly City $model
    ){}

    public function getAll()
    {
        return $this->model::all();
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
        $this->findById($id)->delete();
    }
}
