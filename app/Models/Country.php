<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    protected $fillable = ['chinese_name', 'english_name', 'continent_id'];

    public function continent(){
        return $this->belongsTo(Continent::class, 'continent_id', 'id');
    }

    public function itineraries(){
        return $this->hasMany(Itinerary::class, 'country_id', 'id');
    }
}
