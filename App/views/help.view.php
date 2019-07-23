<?php
    use App\Core\Session;
    
    if(Session::get('role') == 'Admin')
    {
        redirect('/');
    }


?>
<?php require ('partials/header.php'); ?>
    <div class="row">
        <h1>Frequently Asked Questions</h1>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"
                        href="#collapseOne">
                        How Do i access the website
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <ul class="nav">
                            <li>First Register if you don't have an account</li>
                            <li>Secondly login</li> 

                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"
                        href="#collapseTwo">
                        How do i access the music controls to stream music
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav">
                            <li>On the main page click on any song you like and it will direct you to the song</li>
                            <li>Click play on the controls and enjoy your music</li>
                            <li>Leave a comment</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"
                        href="#collapseThree">
                        How do i comment on the song i like
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav">
                            <li>On the main page click on the song you like and you will be directed to another page</li>
                            <li>Scroll down to the texterea box and comment on the song you like</li>
                            <li>Next click the comment button and boom! it's done</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"
                        href="#collapseFour">
                            How do i subscribe on the membership deals
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav">
                            <li>Click on Account and head to your account</li>
                            <li>Here you can choose which subscription you like and then click subscribe    </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require ('partials/footer.php'); ?>
    