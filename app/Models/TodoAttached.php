<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoAttached extends Model
{
    use HasFactory;

    public function toDO()
    {
        return $this->belongsTo(ToDo::class);
    }
}