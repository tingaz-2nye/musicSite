<?php 
    namespace App\Controllers;

    use App\Models\Comment;

    class CommentsController
    {

        public function comment()
        {
            $id = $_POST['id'];
            $comment = $_POST['comment'];

            Comment::comment($id,$comment);

            redirect('overview?songId='.$id.'');
            
        }

    }