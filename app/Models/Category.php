<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = ['id', 'name', 'slug'];
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
