<?php

namespace App\Http\Controllers\web;

use Carbon\Carbon;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        $date = Carbon::today();
        $user = Auth::user();
        $data['today_sessions'] = Schedule::select('patients.id', 'patients.name', 'schedules.appointment')
            ->join('patients', 'patients.id', '=', 'schedules.patient_id')
            ->join('specialists', 'specialists.id', '=', 'patients.specialist_id')
            ->where('specialists.id', '=', $user->specialists->first()->id)
            ->whereDate('appointment', '=', $date->toDateString())
            ->get();
        // dd($data['today_sessions']);
        $data['all_sessions'] = Schedule::select('patients.id', 'patients.name', 'schedules.appointment')
            ->join('patients', 'patients.id', '=', 'schedules.patient_id')
            ->join('specialists', 'specialists.id', '=', 'patients.specialist_id')
            ->where('specialists.id', '=', $user->specialists->first()->id)
            ->paginate(10);
        return view('web.specialist.schedule')->with($data);
    }

    public function full_calendar()
    {
        return view('web.specialist.full_calendar');
    }
}