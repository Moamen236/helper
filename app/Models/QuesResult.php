<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuesResult extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}