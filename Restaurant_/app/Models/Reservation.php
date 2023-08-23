<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'reserv_name', 'reserv_email', 'reserv_phone', 'no_guest', 'reserv_date', 'reserv_time', 'reserv_msg'
    ];
}
