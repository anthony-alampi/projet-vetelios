<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    
    protected $fillable = [
        'user_id',
        'appointment_id',
    ];

    // public function user()
    // {
    //     return $this->belongsToMany(User::class); //permet à ce model d'accéder aux données USER
    // }
    // public function appointment()
    // {
    //     return $this->belongsToMany(Appointment::class); //permet à ce model d'accéder aux données appointment
    // }
}
