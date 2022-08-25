<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'post_id',
        'email',
        'name',
        'body'
    ];

    protected $table = 'comments';

    public static function massInsert($items) {
        foreach ($items as $item) {
            DB::table("comments")->insert([
                "id" => $item->id,
                "post_id" => $item->postId,
                "name" => $item->name,
                "email" => $item->email,
                "body" => $item->body
            ]);
        }
    }

    public static function findComment($string) {
        $result = [];
        $comments = DB::table("comments")->where("body", "like", "%".$string."%")->get();
        foreach ($comments as $comment) {
            $post = DB::table("posts")->find($comment->post_id);
            $result[] = [
                "post_title" => $post->title,
                "comment_text" => $comment->body
            ];
        }
        return $result;
    }
}
