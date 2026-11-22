<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\attributes\WithoutTimestamps;

#[WithoutTimestamps]
class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'pageTitle',
        'image',
        'cardTitle',
        'description',
        'academicBackground',
    ];
}
