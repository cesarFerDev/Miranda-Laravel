<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Room extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string'
    ];
    
    protected $fillable = ["type", "number", "price", "discount", "cancellation", "description", "amenities", "photos", "is_available"];

    public function getPhotos() {
        return json_decode($this->photos);
    }

    public function setBookings($bookings) {
        $aux = [];
        foreach ($bookings as $index => $booking) {
            if ($booking->room_id == $this->id) {
                $aux[] = $booking;
            }
        }
        $this->bookings = $aux;
    }

    public function isOccupied($date) {
        $datetime = strtotime($date->format('Y-m-d H:i:s'));
        foreach ($this->bookings as $index => $booking) {
            $room_candidate = $booking->room_id;
            $check_in = strtotime($booking->check_in);
            $check_out = strtotime($booking->check_out);
            
            if ($this->id == $room_candidate and ($check_in <= $datetime and $check_out >= $datetime)) {
                return true;
            }
        }
        return false;
    }

    public function occupancyPercentage($startDate, $endDate) {
        $auxDate = date_create($startDate);
        $rawInterval = strtotime($endDate) - strtotime($startDate);
        
        if ($rawInterval < 1) {
            return 0;
        }
        $daysInterval = $rawInterval / (60 * 60 * 24);
        $daysOccupied = 0;

        for ($i = 0; $i < $daysInterval; $i++) {
            if ($this->isOccupied($auxDate)) {
                $daysOccupied++;
            }
            $auxDate->modify('+1 day');
        }
        return round(($daysOccupied / $daysInterval) * 100);
    }

    public static function availableRooms($rooms, $startDate, $endDate) {
        $roomsAvailable = [];
        foreach($rooms as $index => $room) {
            if ($room->occupancyPercentage($startDate, $endDate) != 0) {
                $roomsAvailable[] = $room;
            }
        }
        return $roomsAvailable;
        }
}
