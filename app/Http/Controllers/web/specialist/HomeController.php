<?php

namespace App\Http\Controllers\web\specialist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.specialist.index');
    }
}