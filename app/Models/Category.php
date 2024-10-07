<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
        'name', 'description',
    ];
    use HasFactory;
    public function post()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

}
