<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function species()
    {
        return $this->hasOne(Species::class, 'id');

        // => Product->species == Species->name == 'Cod'
    }

    public function size()
    {
        return $this->hasOne(Size::class, 'id');
    }
}
