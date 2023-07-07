<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Eloquent\Model;

class BookingController extends Controller
{
    public function store(string $id, Request $request)
    {
        $today =  strtotime(date('Y-m-d H:i:s'));
        $startDate = $request->check_in; 
        $endDate = $request->check_out;

        if (strtotime($startDate) <= $today or strtotime($startDate) > strtotime($endDate)) {
            return redirect()->back()->with('error', "Invalid Date Input");
        } else {
            $booking = new Booking();
            $booking->guest_name = trim(htmlspecialchars($request->name));
            $booking->guest_email = trim(htmlspecialchars($request->email));
            $booking->guest_contact = trim(htmlspecialchars($request->contact));
            $booking->order_date = date('Y-m-d H:i:s');
            $booking->check_in = $startDate;
            $booking->check_out = $endDate;
            $booking->special_request = trim(htmlspecialchars($request->special_request));
            $booking->room_id = $id;
            $booking->status = "Check In";
            $booking->save();
            return redirect()->back()->with('success', 'You have booked this room, have a great stay!');
        }
    }
}
