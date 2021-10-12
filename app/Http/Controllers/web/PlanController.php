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
        $data['plan_types'] = PlanType::select('id', 'name')->get();
        // dd($data);
        return view('web.specialist.plan')->with($data);

        // $types = ['Strength Points', 'Weakness Points', 'long term goals', 'Short Term goals'];
        // foreach ($types as $key => $type) {
        //     $string = strtolower(preg_replace("[\s]", "_", $type));
        //     $data["$string"] = PlanType::select('id', 'name')
        //         ->where('id', '=', $key + 1)
        //         ->get();
        // }

    }
}