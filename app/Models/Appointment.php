<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'horaire',
        'veterinaire',
        
    ];

    public function appointments()
    {
        return $this->belongsToMany(User::class, 'bookings_table'); //permet à ce model d'accéder aux données USER
    }
}
