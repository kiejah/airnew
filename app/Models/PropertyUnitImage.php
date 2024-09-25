<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUnitImage extends Model
{
    use HasFactory;
    protected $fillable= ['property_id','unit_type','image_name'];
    // public function propertyUnitImages(){
    //     return $this->belongsTo('App\Models\Property','property_id');
    // }
}
