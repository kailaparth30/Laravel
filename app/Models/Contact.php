<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $table = "contact";
    protected $fillable = [
        'fullname',
        'emailaddres',
        'phonenumber',
        'message'
    ];
}
