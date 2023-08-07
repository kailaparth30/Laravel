<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'gender',
        'address',
        'state',
        'country',
        'dob',
        'password',
        'status'
    ];

    public function setUserNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public function getDobAttribute($value)
    {
        return date("d-M-Y",strtotime($value));
    }
}
