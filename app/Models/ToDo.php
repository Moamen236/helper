<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
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

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function attachments()
    {
        return $this->hasMany(TodoAttached::class);
    }
}