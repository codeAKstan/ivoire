<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'name',
        'email',
        'role',
        'linkedin',
        'resume_url',
        'message',
    ];
}
