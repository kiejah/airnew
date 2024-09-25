<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'type',
        'country',
        'state',
        'city',
        'zip_code',
        'address',
        'parent_id',
        'is_active',
        'location_id',
        'featured_id',
    ];

    public static $Type=[
        'own_property'=> 'Own Property',
        'lease_property'=>'Lease Property',
        'rent_property_unit'=>'Property with Rental Units',
    ];

    public function thumbnail(){
        return $this->hasOne('App\Models\PropertyImage','property_id','id')->where('type','thumbnail');
    }

    public function propertyImages(){
        return $this->hasMany('App\Models\PropertyImage','property_id','id')->where('type','extra');
    }

    public function totalUnit(){
        return $this->hasMany('App\Models\PropertyUnit','property_id','id')->count();
    }
    public function totalBookings(){
        return $this->hasMany('App\Models\Booking','property_id','id')->count();
    }
    public function totalUnits(){
        return $this->hasMany('App\Models\PropertyUnit','property_id','id');
    }
    public function totalRoom(){
        $units= $this->totalUnits;

        $totalUnit=0;
        foreach($units as $unit){
            $totalUnit+=$unit->bedroom;

        }
        return $totalUnit;
    }
    public function location(){
        return $this->belongsTo('App\Models\Location','location_id','id');
    }
    public function manager(){
        return $this->belongsTo('App\Models\User','parent_id');
    }
    public function units()
    {
        return $this->hasMany('App\Models\PropertyUnit','property_id','id');
    }
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking','property_id','id');
    }
    public function scopeFilter($query, array $filters){
        if ($filters['location'] ?? false){
            $query->where('location_id','like','%'.request('location').'%');
        }
        if ($filters['unit_type'] ?? false){
            $query->whereHas('units', function ($unitQuery) use ($filters) {
                // Apply your condition on the units relationship
                $unitQuery->where('bedroom', '=', $filters['unit_type']);
            });
        }

    }
    
   



}
