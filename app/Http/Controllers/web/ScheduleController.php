<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $date = Carbon::now();
        $data['today_sessions'] = Schedule::select('appointment', 'name')
            ->join('patients', 'patients.id', '=', 'schedules.patient_id')
            ->whereDate('appointment', '=', $date->toDateString())
            ->get();
        // dd($data['today_sessions']);
        $data['all_sessions'] = Schedule::select('appointment', 'name')
            ->join('patients', 'patients.id', '=', 'schedules.patient_id')
            ->paginate(10);
        return view('web.specialist.schedule')->with($data);
    }

    public function full_calendar()
    {
        return view('web.specialist.full_calendar');
    }
}