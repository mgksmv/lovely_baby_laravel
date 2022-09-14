<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    public function additional_specifications()
    {
        return $this->hasMany(AdditionalSpecificationCollection::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
