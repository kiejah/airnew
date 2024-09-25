<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\Property;


use App\Models\PropertyUnit;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\PropertyUnitImage;

class FrontEndController extends Controller
{
    //
    public function index(){
        //$properties = Property::where('featured_id','1')->get();
        //$locations = Location::all();
        $properties= Property::where('featured_id','1')->filter(request(['location','unit_type']))->get();
        $locations = Location::orderBy('name', 'ASC')->get();

        return view('frontend.landing',compact(['properties','locations']));
    }
    public function properties(){
        //dd('tuko hapa');
        $locations = Location::orderBy('name', 'ASC')->get();
        return view('frontend.properties',compact('locations'));
    }
    public function about_us(){
        return view('frontend.about_us.about_us_main');
    }
    public function showProperty($id)
    {
       
        $property = Property::find($id);
        $units = PropertyUnit::where('property_id', $id)->orderBy('id', 'desc')->get();
        $propert_unit_images = PropertyUnitImage::where('property_id', $id)->get();
        $propert_unit_types = PropertyUnitImage::select('unit_type')->distinct()->where('property_id', $id)->get();
        return view('frontend.property.show', compact('property', 'units','propert_unit_images','propert_unit_types'));   
    }
    public function unitInquries(Request $request){

        // $table->string('property_id')->nullable();
        //     $table->string('unit_id')->nullable();
        //     $table->string('booker_name')->nullable();
        //     $table->string('booker_email')->nullable();
        //     $table->string('booker_phone')->nullable();
        $validator = \Validator::make(
            $request->all(), [
                'name' => 'required|regex:/^[\s\w-]*$/',
                'email' => 'required|email',
                'phone' => 'required',

            ], [
                'regex' => __('The Name format is invalid, Contains letter, number and only alphanum'),
            ]

        );
        if ($validator->fails()) {
            $messages = $validator->getMessageBag();

            return response()->json([
                'status' => 'error',
                'msg' => $messages->first(),

            ]);

        }
        $book_req = new Booking();
        $book_req->unit_id = $request->unit_id;
        $book_req->property_id = $request->property_id;
        $book_req->booker_name = $request->name;
        $book_req->booker_email = $request->email;
        $book_req->booker_phone = $request->phone;
        $book_req->save();
        //return redirect()->back()->with('success', 'Thank You, We have your details an we will reach on email.');
        $property = Property::find($request->property_id);
        $units = PropertyUnit::where('property_id', $request->property_id)->orderBy('id', 'desc')->get();
        $propert_unit_images = PropertyUnitImage::where('property_id', $request->property_id)->get();
        $propert_unit_types = PropertyUnitImage::select('unit_type')->distinct()->where('property_id', $request->property_id)->get();
        return view('frontend.property.show', compact('property', 'units','propert_unit_images','propert_unit_types'))->with('success', 'Thank You, We have your details an we will reach on email.');   
    }
    
}
