<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckQuestion extends Model
{
    use HasFactory;

    public function results()
    {
        return $this->hasMany(CheckResult::class);
    }
}