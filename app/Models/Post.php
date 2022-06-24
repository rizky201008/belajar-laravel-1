<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    /*
    *$fillable memperbolehkan pengisian kolom yang ada pada list
    *$guarded tidak memperbolehkan pengisian kolom yang ada pada list
    */
    protected $fillable =['title','category_id', 'excerpt','slug','body'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
