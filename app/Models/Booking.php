<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends UUIDModel
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["id","guest_name","guest_email", "guest_contact", "check_in", "check_out", "special_request", "room_id", "status"];
}