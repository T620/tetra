<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketProduct extends Model
{
    use HasFactory;

    public function product() : object
    {
        return $this->hasOne(Product::class, 'id');
    }

    public function priceRange() : string
    {
        return sprintf ('%s - %s', $this->price_low, $this->price_high);
    }
}
