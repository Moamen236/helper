<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        switch (Auth::user()->role->name) {
            case 'specialist':
                return redirect('/specialist/home');
                break;
            case 'caregiver':
                return redirect('/');;
                break;
            default:
                return redirect('/');;
                break;
        }
    }
}