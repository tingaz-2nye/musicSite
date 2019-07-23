<?php
    use App\Core\Session;

    if(Session::get('role') == 'Admin')
    {
        redirect('/');
    }


?>
<?php require 'partials/header.php'; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Media Gallery</h5>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/Tonik - Mkalabongo ft St Clemo and J.O (malawi-music.com).mp3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/Tonik - Mkalabongo ft St Clemo and J.O (malawi-music.com).mp3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/Tonik - Mkalabongo ft St Clemo and J.O (malawi-music.com).mp3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/Tonik - Mkalabongo ft St Clemo and J.O (malawi-music.com).mp3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/Tonik - Mkalabongo ft St Clemo and J.O (malawi-music.com).mp3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/Tonik - Mkalabongo ft St Clemo and J.O (malawi-music.com).mp3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/Tonik - Mkalabongo ft St Clemo and J.O (malawi-music.com).mp3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="img/Tonik - Mkalabongo ft St Clemo and J.O (malawi-music.com).mp3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'partials/footer.php'; ?>