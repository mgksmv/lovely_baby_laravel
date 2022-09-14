<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomSpecification extends Model
{
    use HasFactory;

    public function additional_specifications_collection()
    {
        return $this->hasMany(AdditionalSpecificationCollection::class);
    }

    public function additional_specifications_product()
    {
        return $this->hasMany(AdditionalSpecificationProduct::class);
    }
}
