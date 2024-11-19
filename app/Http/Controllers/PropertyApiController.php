<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyUnit;
use App\Models\PropertyImage;
use App\Models\PropertyUnitImage;

use Illuminate\Http\Request;

class PropertyApiController extends Controller
{
    //
    public function index()
    {
        //
        return Property::with('thumbnail')->with('propertyImages')->with('propUnitImages')->with('units')->get();
    }
    public function show(string $id)
    {
        //
        return Property::with('thumbnail')->with('propertyImages')->with('propUnitImages')->with('units')->where('id',$id)->get();

    }
    public function search(string $name)
    {
        //
        $name = trim($name,'*()"><!@#$%^& ');
        return $product = Property::where('name','like','%'.$name.'%')
                                    ->orWhere('name','like','%'.$name.'%')
                                    ->orWhere('state','like','%'.$name.'%')
                                    ->orWhere('description','like','%'.$name.'%')
                                    ->get();
    }
    public function units(string $p_id)
    {
        //
        return PropertyUnit::where('property_id',$p_id)->get();

    }
}
