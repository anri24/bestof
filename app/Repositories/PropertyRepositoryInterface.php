<?php

namespace App\Repositories;

interface PropertyRepositoryInterface
{
    public function index();

    public function show($id);

    public function create();

    public function store($data);

    public function update($data,$id);

    public function delete($id);

    public function userHome($limit);
}
