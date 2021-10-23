<?php

namespace App\Http\Controllers\web\specialist;

use App\Models\User;
use App\Models\Specialist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $current = Auth::user()->id;
        $specialist = Specialist::where('user_id', '=', $current)->first();

        if (!$specialist) {
            Specialist::create([
                "serial_no" => Str::random(),
                "user_id" => Auth::user()->id,
            ]);
        }
        // $user = Auth::user();
        // $doc = $user->specialists->first()->id;
        // dd($doc);
        return view('web.specialist.index');
    }
}