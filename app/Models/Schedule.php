<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function specialist()
    {
        return $this->belongsTo(User::where('id', $this->user_id)->get());
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}