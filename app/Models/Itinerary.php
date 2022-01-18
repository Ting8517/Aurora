<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;

    protected $table = 'itineraries'; 
    protected $fillable = ['country_id', 'place_chinese_name', 'place_english_name', 'introduce', 'information', 'image_url'];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

}
