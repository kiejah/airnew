<?php

namespace App\Helpers;

use App\Models\Booking;

class InquiriesHelper
{
    public static function getInquiries($unit_id)
    {
        return Booking::where('unit_id', $unit_id)->get();
    }


    // You can add more functions as needed...
}