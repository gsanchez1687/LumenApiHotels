<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomHotel extends Model
{
   use HasFactory;
   protected $table = 'rooms_hotels';
   protected $fillable = [
    'hotel_id',
    'room_id',
    'amount',
  ];
}
