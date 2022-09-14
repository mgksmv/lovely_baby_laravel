<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function additional_specifications()
    {
        return $this->hasMany(AdditionalSpecificationProduct::class);
    }

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
