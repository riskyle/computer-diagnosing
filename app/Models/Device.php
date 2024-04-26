<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = [
        'serial_number',
        'device_type',
        'brand',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function issue()
    {
        return $this->hasMany(Issue::class, foreignKey: "device_id", localKey: "device_id");
    }
    public function diagnosticResult()
    {
        return $this->hasMany(DiagnosticResult::class, foreignKey: "device_id", localKey: "device_id");
    }
}
