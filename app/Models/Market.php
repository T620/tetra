<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Enums;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

class Market extends Model
{
    use HasFactory;

    protected static function booted() : void
    {
        static::saved(function ($market) {
            // I couldn't get the seeder to work but this does the job. If the slug's empty, generate it, save it and return it 
            if (empty($market->slug)) {
                $market->slug = (string) Str::of($market->name)->slug('-');
                $market->save();
            }
        });
    }

    // I have next to no knowledge of the fishing industry but i'm trying to demo that I understand how to use enums along with foreign keys so please forgive the naivety.

    CONST SIZES = [
        0 =>'Small',
        1 =>'Medium',
        2 =>'Large',
        3 =>'Regional'
    ];

    CONST TYPES = [
        0 => 'Public',
        1 => 'Private',
        2 => 'Export'
    ];

    public function products() : object
    {
        // we could use hasManyThrough (and access the Product class) but we probably don't need to drill down so deep into the product properties since this function will primarily be used to create a table on the front end

        // also, we'll need different product prices per market so we need another layer on top of Products to do this
        return $this->hasMany(MarketProduct::class, 'id');
    }

    public function primaryProduct() : object
    {

        // this market is well known for selling, Trout for example, which is a Species. However, they sell many sizes of trout and at different prices so we need one Species to then link to many products (the sizes of that fish in the real world)
        return $this->hasOne(Species::class, 'id');
    }

    public function size() : string
    {
        return $this::SIZES[$this->size];
    }

    public function type() : string
    {
        return $this::TYPES[$this->type];
    }
}
