<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Question extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

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

    public function question($lang = null)
    {
        $lang = $lang ?? App::getLocale();

        return json_decode($this->question)->$lang;
    }
}