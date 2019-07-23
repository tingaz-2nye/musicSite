<?php 

    use App\Core\Session; 

    if(Session::get('Loggedin') == false){
        redirect('login');
    }



?>
<?php include ('partials/header.php'); ?>
    <div class="row">
        <a href="/" class="btn btn-default"><i class="fa fa-arrow-left fa-2x"></i></a>
        <hr>
    </div>
    <div class="row"> 
        <table class="table table-striped">
            <?php 
            foreach($musicFiles as $file){ 
            ?>
                <tr>
                    <td><img src="img/iHeadphone.png" alt=""> <?=  $file->file_name; ?></td>
                    <td>
                        <audio controls>
                            <source src="<?= $file->file_location; ?>" type="audio/mpeg">
                            <source src="<?= $file->file_location; ?>" type="audio/ogg">
                            <source src="<?= $file->file_location; ?>" type="audio/wav">
                            Your browser does not support the audio element.
                        </audio>
                    </td>
                    <?php if(Session::get('role') == 'Admin'): ?>
                        <td>
                            <a href="deletesong?id=<?= $file->id; ?>" class="btn btn-danger"><i class="fa fa-close" style="color:white;"></i></a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php 
                }
            ?>
        </table>
        <h3>Comments</h3>
        <?php 
            if($comments){
                foreach($comments as $comment){ ?>
                    <div class="panel panel-default">
                        <div class="panel-body"> 
                            <p><?= $comment->comment; ?></p>
                        </div>
                        <div class="panel-footer">
                            <p class="text-right">Posted on <?= $comment->post_time; ?></p>
                        </div>
                    </div>
        <?php 
            } 
        }else{
            echo '<hr><p class="text-center">No Comments Currently Available </p><br />';
        }
        ?>
            
        <form action="comment" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="form-group">
                <textarea class="form-control" name="comment" id="" cols="30" rows="10" placeholder="Comments"></textarea>
            </div>
            <input type="submit" class="btn btn-success" name="submit" value="Comment"> 
        </form>
    </div>
<?php include ('partials/footer.php'); ?>