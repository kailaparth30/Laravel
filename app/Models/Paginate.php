<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Paginate extends Model
{
    public function paginate()
    {
        Paginator::useBootstrap();
    }
}
