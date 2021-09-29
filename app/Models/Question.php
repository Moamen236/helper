<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(QuesCategory::class);
    }

    public function type()
    {
        return $this->belongsTo(QuesType::class);
    }

    public function results()
    {
        return $this->hasMany(QuesResult::class);
    }
}