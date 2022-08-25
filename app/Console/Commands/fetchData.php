<?php

namespace App\Console\Commands;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Console\Command;

class fetchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetchdata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data into tables';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $json = file_get_contents("https://jsonplaceholder.typicode.com/posts");
            $posts = json_decode($json);

            $json = file_get_contents("https://jsonplaceholder.typicode.com/comments");
            $comments = json_decode($json);

            $postsCount = count($posts);
            $commentsCount = count($comments);

            Post::massInsert($posts);
            Comment::massInsert($comments);

            $this->info("Загружено ".$postsCount." записей и ".$commentsCount." комментариев");
        } catch (\Exception $exception) {
            $this->info("Oops... Some problems!");
            $this->info($exception);
        }
        return 1;
    }
}
