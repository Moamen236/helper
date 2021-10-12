<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlanTypeResource;
use App\Models\PlanType;
use Illuminate\Http\Request;

class PlanTypeController extends Controller
{
    public function index()
    {
        $plan_types = PlanType::get();
        return PlanTypeResource::collection($plan_types);
    }

    public function show($id)
    {
        $plan_type = PlanType::findOrFail($id);
        return new PlanTypeResource($plan_type);
    }
}