<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::get();
        return ScheduleResource::collection($schedules);
    }

    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);
        return new ScheduleResource($schedule);
    }
}