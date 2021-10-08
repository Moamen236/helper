<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuesCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function type()
    {
        return $this->belongsTo(QuesType::class);
    }

    //Lang
    public function name($lang = null)
    {
        $lang = $lang ?? App::getLocale();

        return json_decode($this->name)->$lang;
    }
}