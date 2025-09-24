<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosisDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function diagnosis() {
        return $this->belongsTo(Diagnosis::class);
    }

    public function symptom() {
        return $this->belongsTo(Symptom::class);
    }
}
