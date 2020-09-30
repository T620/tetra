<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function species() : object
    {
        return $this->hasOne(Species::class, 'id');

        // => Product->species == Species->name == 'Cod'
    }

    public function size() : object
    {
        return $this->hasOne(Size::class, 'id');
    }

    public function priceRange() : string
    {
        return sprintf ('%s - %s', $this->price_low, $this->price_high);
    }
}
