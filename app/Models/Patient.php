<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function caregiver()
    {
        return $this->belongsTo(Caregiver::class);
    }

    public function toDos() // the Patient has many to do
    {
        return $this->hasMany(ToDo::class);
    }

    public function schedules() // the Patient has many schedule
    {
        return $this->hasMany(Schedule::class);
    }

    public function results()
    {
        return $this->hasMany(QuesResult::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function finalResults()
    {
        return $this->hasMany(FinalResult::class);
    }
}