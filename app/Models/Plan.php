<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function type()
    {
        return $this->belongsTo(PlanType::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}