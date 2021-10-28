<?php

namespace App\Http\Controllers\web;

use Exception;
use App\Models\ToDo;
use App\Models\Patient;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index($id)
    {
        $data['patient'] = Patient::findOrFail($id);
        $data['to_dos'] = ToDo::where('patient_id', $id)->paginate(5);
        $data['sessions'] = Schedule::where('patient_id', $id)->get();
        $user = Auth::user();
        $data['specialist_id'] = $user->specialists->first()->id;
        return view('web.specialist.patient_profile')->with($data);
    }

    public function delete(Patient $patient, Request $request)
    {
        try {
            $patient->delete($patient);
            $msg = 'Patient Deleted sucessfully';
        } catch (Exception $e) {
            $msg = 'You Can\'t Delete this patinet';
        }
        $request->session()->flash('success', $msg);
        return redirect('specialist/patients');
    }

    //--- Missions ---//
    public function add_mission(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'details' => 'required|string',
            'patient_id' => 'required|exists:patients,id'
        ]);

        ToDo::create([
            'title' => $request->title,
            'details' => $request->details,
            'patient_id' => $request->patient_id,
        ]);

        $request->session()->flash('success', 'Mission Created sucessfully');
        return back();
    }

    public function update_mission(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'details' => 'nullable|string',
            'id' => 'required|exists:to_dos,id'
        ]);

        ToDo::findOrFail($request->id)->update([
            'title' => $request->title,
            'details' => $request->details,
        ]);

        $request->session()->flash('success', 'Mission Updated sucessfully');
        return back();
    }

    public function delete_mission(ToDo $mission, Request $request)
    {
        $mission->delete();
        $request->session()->flash('success', 'Mission Deleted sucessfully');
        return back();
    }

    //--- Sessions ---//
    public function add_session(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'patient_id' => 'required|exists:patients,id'
        ]);
        $date_time = $request->date . ' ' . $request->time;
        Schedule::create([
            'appointment' => $date_time,
            'patient_id' => $request->patient_id,
        ]);

        $request->session()->flash('success', 'Session Created sucessfully');
        return back();
    }

    public function update_session(Request $request)
    {

        $request->validate([
            'date' => 'nullable|date',
            'time' => 'nullable|date_format:H:i',
            'session_id' => 'required|exists:schedules,id'
        ]);
        $date_time = $request->date . ' ' . $request->time;
        Schedule::findOrFail($request->session_id)->update([
            'appointment' => $date_time,
        ]);

        $request->session()->flash('success', 'Mission Updated sucessfully');
        return back();
    }

    public function delete_session(Schedule $session, Request $request)
    {
        $session->delete();
        $request->session()->flash('success', 'Session Deleted sucessfully');
        return back();
    }
}