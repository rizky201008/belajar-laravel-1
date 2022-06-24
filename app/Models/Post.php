<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /*
    *$fillable memperbolehkan pengisian kolom yang ada pada list
    *$guarded tidak memperbolehkan pengisian kolom yang ada pada list
    */
    protected $guarded = [
        'id'
    ];
}
