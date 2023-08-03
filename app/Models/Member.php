<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public $table = "member";
    protected $primarykey = "member_id";

    function group()
    {
        return $this->hasmany('App\models\group', 'group_id', 'group_id');
    }
}
