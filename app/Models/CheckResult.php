<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckResult extends Model
{
    use HasFactory;

    public function case()
    {
        return $this->belongsTo(CheckCase::class);
    }

    public function question()
    {
        return $this->belongsTo(CheckQuestion::class);
    }
}