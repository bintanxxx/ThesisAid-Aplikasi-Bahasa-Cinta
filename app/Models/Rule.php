<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }

    public function love_language()
    {
        return $this->belongsTo(LoveLanguage::class);
    }
}
