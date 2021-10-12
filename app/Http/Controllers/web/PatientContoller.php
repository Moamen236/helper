<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Schedule;
use App\Models\ToDo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientContoller extends Controller
{
    public function view_patients()
    {
        $data['patients'] = Patient::paginate(10);
        // dd($data);
        return view('web.specialist.patients')->with($data);
    }

    public function view_patient($id)
    {
        $data['patient'] = Patient::findOrFail($id);
        $data['to_dos'] = ToDo::where('patient_id', $id)->paginate(5);
        $data['sessions'] = Schedule::where('patient_id', $id)->get();
        return view('web.specialist.patient_profile')->with($data);
    }
}