<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuesCatResource;
use App\Models\QuesCategory;
use Illuminate\Http\Request;

class QuesCatController extends Controller
{
    public function index()
    {
        $quesCats = QuesCategory::get();
        return QuesCatResource::collection($quesCats);
    }

    public function show(QuesCategory $quesCat)
    {
        return new QuesCatResource($quesCat);
    }
}