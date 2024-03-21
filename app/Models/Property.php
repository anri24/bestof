<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'title',
        'description',
        'price_type',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function subCategory()
    {
        return $this->belongsTo(Category::class,'sub_category_id','id');
    }

    public function propertyDetail()
    {
        return $this->hasOne(PropertyDetail::class,'property_id','id');
    }
}
