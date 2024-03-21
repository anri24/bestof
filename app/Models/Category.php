<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'parent_id',
        'title',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id','id');
    }

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id','id');
    }

    public function property()
    {
        return $this->hasMany(Property::class,'category_id','id');
    }
}
