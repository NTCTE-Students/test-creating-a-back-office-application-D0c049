<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'income',
        'expense',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
