<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealType extends Model
{
    use HasFactory;

    protected $table = 'deal_types';

    protected $fillable = [
      'name',
    ];
}
