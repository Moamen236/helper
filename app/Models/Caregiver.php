<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function toDos() // the Caregiver has many to do
    {
        return $this->hasMany(ToDo::class);
    }

    public function schedules() // the Caregiver has many schedule
    {
        return $this->hasMany(Schedule::class);
    }
}