<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalSpecificationCollection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function custom_specification()
    {
        return $this->belongsTo(CustomSpecification::class);
    }
}
