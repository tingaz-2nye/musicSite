<?php

    namespace App\Models;

    use App\Core\App;
    use PDO;

    class Comment
    {
        public static function comment($id,$comment)
        {
            App::get('Database')->insert(
                'comments',
                [
                    "song_id" => $id,
                    "comment" => $comment
                ]
            );
        }
    }