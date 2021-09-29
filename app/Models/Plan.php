<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(PlanType::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}