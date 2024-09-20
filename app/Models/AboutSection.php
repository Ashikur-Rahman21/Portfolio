<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'facebook',
        'twitter',
        'linkedin',
        'github',
        'about_me',
        'history',
    ];
}
