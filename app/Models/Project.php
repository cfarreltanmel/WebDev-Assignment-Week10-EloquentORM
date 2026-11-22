<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\WithoutTimestamps;

#[WithoutTimestamps]
class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'projectTitle',
        'projectDescription',
        'projectLink',
    ];
}
