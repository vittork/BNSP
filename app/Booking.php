<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['user_id', 'product_id', 'gender', 'identitas', 'date', 'duration', 'breakfast'];
}
