<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\WithoutTimestamps;

#[WithoutTimestamps]
class Home extends Model
{
    use HasFactory;
    protected $guarded = [
        'pageTitle',
        'image',
        'cardTitle',
        'description',
        'buttonTitle',
    ];
}
