<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactQuery extends Model
{
    use HasFactory;
protected $fillable = [
'firstname',
'email',
'contact',
'menu_language',
'message_query',
];
}
