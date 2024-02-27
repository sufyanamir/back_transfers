<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admindata extends Model
{
    use HasFactory;
    protected $table = 'admindata';
    protected $timestamp = false;
    protected $fillable = [
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
    public $timestamps = false;
}
