<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        "device_id",
        "ans_one",
        "ans_two",
        "ans_three",
        "ans_four",
        "ans_five",
        "status",
    ];
    public function device()
    {
        return $this->belongsTo(Device::class, foreignKey: "device_id", ownerKey: "device_id");
    }
    public function diagnosticResult()
    {
        return $this->hasMany(DiagnosticResult::class, foreignKey: "issue_id", localKey: "issue_id");
    }
}
