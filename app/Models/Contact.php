<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends UUIDModel
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["id", "contact_date", "guest_name", "guest_email", "guest_contact", "content_title", "content_text"];
}