<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketProduct extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->hasOne(Product::class, 'id');
    }

    public function priceRange()
    {
        return "{$this->price_low}-{$this->price_high}";
    }
}
