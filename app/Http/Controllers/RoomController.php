<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;


class RoomController extends Controller
{
    public function home()
    {
        $rooms = Room::orderBy('number', 'asc')->get();
        return view('index', ['rooms' => $rooms]);
    }

    public function rooms(Request $request)
    {
        $rooms = Room::orderBy('number', 'asc')->get();

        if($request->start != "" and $request->end != "") {
            $today =  strtotime(date('Y-m-d H:i:s'));
            $startDate = $request->start; 
            $endDate = $request->end;
            if (strtotime($startDate) <= $today or  strtotime($startDate) > strtotime($endDate)) {
                return redirect()->back()->with('error', "Invalid Date Input");
            } else {
                $bookings = Booking::all();
                foreach($rooms as $room) {
                    //$room->bookings = $room->setBookingsLaravel();
                    $room->setBookings($bookings);
                }
                $rooms = Room::availableRooms($rooms, $request->start, $request->end);
            }
        }

        return view('rooms', ['rooms' => $rooms]);
    }

    public function offers()
    {
        $rooms_offer = Room::where('discount', '>', '0')->orderBy('discount', 'desc')->get();
        $rooms_popular = Room::orderBy('price', 'asc')->limit(3)->get();

        return view('offers', ['rooms_offer' => $rooms_offer, 'rooms_popular' => $rooms_popular]);
    }

    public function roomDetails(string $id)
    {
        $room = Room::where('id', $id)->firstOrFail();
        $rooms_related = Room::where('type', $room->type)->where('id', '!=', $id)->orderBy('number', 'asc')->limit(2)->get();

        return view('room-details', ['room' => $room, 'rooms_related' => $rooms_related]);
    }
}
