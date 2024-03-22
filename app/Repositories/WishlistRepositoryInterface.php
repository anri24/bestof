<?php

namespace App\Repositories;

interface WishlistRepositoryInterface
{
    public function getAll();

    public function create($id);

    public function delete($id);
}
