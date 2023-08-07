<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $table = "register";
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
