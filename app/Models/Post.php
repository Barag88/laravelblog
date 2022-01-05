<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'perex', 'text', 'image_path'];

    public function postComments() {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'asc');
    }
}
