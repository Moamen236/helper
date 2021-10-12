<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PlanType extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function name($lang = NULL)
    {
        $lang = $lang ?? App::getLocale();

        return json_decode($this->name)->$lang;
    }
}