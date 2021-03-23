<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable = [
         'name','mobile_no','passport_no','flight_date',
        'flight_time','cabin_type','destination',
    ];
}
