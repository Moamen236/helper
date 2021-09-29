<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    public function user() // the specialist belong to user as he one user
    {
        return $this->belongsTo(User::class);
    }

    public function caregivers() // the specialist has many caregiver
    {
        return $this->hasMany(Caregiver::class);
    }

    public function patients() // the specialist has many patients
    {
        return $this->hasMany(Patient::class);
    }

    public function toDos() // the specialist has many to do
    {
        return $this->hasMany(ToDo::class);
    }

    public function schedules() // the specialist has many schedule
    {
        return $this->hasMany(Schedule::class);
    }
}