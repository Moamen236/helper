<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SpecialistResource;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SpecialistController extends Controller
{
    public function index()
    {
        $specialists = Specialist::get();
        return SpecialistResource::collection($specialists);
    }

    public function show($id)
    {
        $specialist = Specialist::with(['user', 'patients'])->findOrFail($id);
        return new SpecialistResource($specialist);
    }
}