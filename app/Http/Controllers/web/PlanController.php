<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\PlanType;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index($id)
    {
        $data['patient_id'] = $id;
        $plan_types = PlanType::select('id', 'name')->get();
        $data['current_level'] = [$plan_types[0], $plan_types[1]];
        $data['objectives'] = [$plan_types[2], $plan_types[3]];

        return view('web.specialist.plan')->with($data);
    }
}