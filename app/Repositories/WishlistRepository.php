<?php

namespace App\Repositories;

use App\Models\Wishlist;

class WishlistRepository implements WishlistRepositoryInterface
{
    public function __construct(
        private readonly Wishlist $model
    ){}

    public function getAll()
    {
        return $this->model::query()->where('user_id',auth()->id())->get();
    }

    public function create($id)
    {
        return $this->model::create(['user_id' => auth()->id,'product_id' => $id]);
    }

    public function delete($id)
    {
        return $this->model::query()->findOrFail($id)->delete();
    }
}
