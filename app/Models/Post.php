<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'title',
        'body'
    ];

    protected $table = 'posts';

    public static function massInsert($items) {
        foreach ($items as $item) {
            DB::table("posts")->insert([
                "id" => $item->id,
                "user_id" => $item->userId,
                "title" => $item->title,
                "body" => $item->body
            ]);
        }
    }
}
