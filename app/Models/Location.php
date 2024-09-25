<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    use HasFactory;
    protected $fillable = ['name','county'];

    public function propertyLocation(){
        return $this->hasMany('App\Models\Property','id','location_id');
    }
}
