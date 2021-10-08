<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuesTypeResource;
use App\Models\QuesType;
use Illuminate\Http\Request;

class QuesTypeController extends Controller
{
    public function index()
    {
        $quesTypes = QuesType::get();
        return QuesTypeResource::collection($quesTypes);
    }

    public function show(QuesType $quesType)
    {
        return new QuesTypeResource($quesType);
    }
}