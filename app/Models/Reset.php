<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reset extends Model
{
    public static function boot()
    {
        self::updated(function ($model) {
            return back(); //or redirect(Request::url())

        });
    }
}
