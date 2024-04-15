<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicztionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'email',
        'contact',
        'menu_language',
        'resume'
    ];
}
