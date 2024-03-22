<?php

namespace App\Http\Controllers;

use App\Repositories\WishlistRepositoryInterface;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function __construct(
        private readonly WishlistRepositoryInterface $repository
    ){}
    public function index()
    {
        return response()->json($this->repository->getAll());
    }

    public function store($id)
    {
        return response()->json($this->repository->create($id));
    }

    public function delete($id)
    {
        return response()->json($this->repository->delete($id));
    }
}
