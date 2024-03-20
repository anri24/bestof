<?php

namespace App\Repositories;

interface PropertyRepositoryInterface
{
    public function getAll();

    public function findById($id);

    public function create($data);

    public function update($data,$id);

    public function delete($id);

    public function getUserHome($limit);
}
