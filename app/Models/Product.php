<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'decription',
        'price',
        'quantity'
    ];


    protected $hidden = [
        'password',
        'remember_token'
    ];
}