<?php

namespace App\Http\Controllers\web;

use Exception;
use App\Models\ToDo;
use App\Models\Patient;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PatientsContoller extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data['specialist_id'] = $user->specialists->first()->id;
        $data['patients'] = Patient::where('specialist_id', '=', $user->specialists->first()->id)->paginate(10);
        return view('web.specialist.patients')->with($data);
    }

    public function patient($id)
    {
        $data['patient'] = Patient::findOrFail($id);
        $data['to_dos'] = ToDo::where('patient_id', $id)->paginate(5);
        $data['sessions'] = Schedule::where('patient_id', $id)->get();
        return view('web.specialist.patient_profile')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "dob" => "required|date",
            "gender" => "required|string",
            "no_of_bros" => "nullable|numeric",
            "arr_btw_bros" => "nullable|numeric",
            "cg_name" => "required|string|max:255",
            "cg_relation" => "required|string|max:255",
            "cg_phone" => "required|string",
            "img" => "nullable|image",
            "specilaist_id" => "required|exists:specialists,id",
        ]);

        $path = Storage::disk('uploads')->put('patients', $request->img);

        Patient::create([
            "name" => $request->name,
            "dob" => $request->dob,
            "gender" => $request->gender,
            "no_of_bro" => $request->no_of_bros,
            "arr_btw_bro" => $request->arr_btw_bros,
            "cg_name" => $request->cg_name,
            "cg_relation" => $request->cg_relation,
            "cg_phone" => $request->cg_phone,
            "img" => $path,
            "specialist_id" => $request->specilaist_id,
        ]);
        $request->session()->flash('success', 'Patient Created sucessfully');
        return back();
    }

    public function Update(Request $request)
    {
        $request->validate([
            "id" => "required|exists:patients,id",
            "name" => "nullable|string|max:255",
            "dob" => "nullable|date",
            "gender" => "nullable|string",
            "no_of_bros" => "nullable|numeric",
            "arr_btw_bros" => "nullable|numeric",
            "cg_name" => "nullable|string|max:255",
            "cg_relation" => "nullable|string|max:255",
            "cg_phone" => "nullable|string",
            "img" => "nullable|image",
            "specilaist_id" => "nullable|exists:specialists,id",
        ]);

        $patient = Patient::where('id', '=', $request->id);
        $path = $patient->img;
        if ($request->hasFile('img')) {
            Storage::disk('uploads')->delete($patient->img);
            $path = Storage::disk('uploads')->put('patients', $request->img);
        }


        Patient::create([
            "name" => $request->name,
            "dob" => $request->dob,
            "gender" => $request->gender,
            "no_of_bro" => $request->no_of_bros,
            "arr_btw_bro" => $request->arr_btw_bros,
            "cg_name" => $request->cg_name,
            "cg_relation" => $request->cg_relation,
            "cg_phone" => $request->cg_phone,
            "img" => $path,
            "specialist_id" => $request->specilaist_id,
        ]);
        $request->session()->flash('success', 'Patient Created sucessfully');
        return back();
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
        return back();
    }
}