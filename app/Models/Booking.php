<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function unit(){
        return $this->belongsTo('App\Models\PropertyUnit','unit_id');
    }
    public function property(){
        return $this->belongsTo('App\Models\Property','property_id');
    }
}
