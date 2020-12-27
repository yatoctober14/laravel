<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;

    public function color()
    {
        return $this->belongsTo('App\Models\Color');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
