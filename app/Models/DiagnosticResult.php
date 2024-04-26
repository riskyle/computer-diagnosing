<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosticResult extends Model
{
    use HasFactory;

    protected $fillable = [
        "issue_id",
        "device_id",
        "diagnosis_details",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function device()
    {
        return $this->belongsTo(Device::class, foreignKey: "device_id", ownerKey: "device_id");
    }
    public function issue()
    {
        return $this->belongsTo(Issue::class, foreignKey: "issue_id", ownerKey: "issue_id");
    }
}
