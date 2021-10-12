<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::get();

        return PatientResource::collection($patients);
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return new PatientResource($patient);
    }
}