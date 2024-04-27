<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = [
        "brand",
        "symptoms",
        "hardware_issues",
        "resolved_at",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
