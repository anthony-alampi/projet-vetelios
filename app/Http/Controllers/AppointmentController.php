<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function importAppointment()
    {
        $appointments = Appointment::orderBy('date', 'desc')->paginate(5);
        return view('appointment', [
            'appointments' => $appointments,
        ]);
    }

    public function showAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointmentSelect', ['appointment' => $appointment]);
    }

    public function create($appointment)
    {
        $appoint = $appointment;

        Booking::create([
            'user_id' => auth()->id(),
            'appointment_id' => $appoint,
        ]);
        return redirect()->route('appointment');
    }
}
