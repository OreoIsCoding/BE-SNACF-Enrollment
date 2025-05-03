<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'user_type',
        'status',
        'first_name',
        'middle_name',
        'last_name'
    ];

    protected $hidden = [
        'password',
    ];
}
