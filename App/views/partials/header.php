<?php use App\Core\Session;  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="stylesheet" href="public/fonts/font-awesome/css/font-awesome.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">Music Stream Live</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <?php if(Session::get('role') == 'Admin'){  ?>
                    <li><a style="font-weight:bold;"><?php 
                        foreach($userfields as $field){ echo "Welcome ".$field->firstname;} ?> </a>
                    </li>
                    <li><a href="/">Home</a></li>   
                    <li><a href="logout">Logout</a></li>
                <?php  }elseif (Session::get('role') == "Member"){ ?>
                    <li>
                        <a style="font-weight:bold;">
                        <?php foreach($userfields as $field){ echo "Welcome ".$field->firstname;} ?> 
                        </a>
                    </li>
                    <li><a href="/">Home</a></li>
                    <li><a href="profile">Account</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="logout">Logout</a></li>
                    <li><a href="help"><i class="fa fa-question-circle fa-2x"></i></a></li>
                <?php }else{ ?>
                    <li><a href="/">Home</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="signup">Signup</a></li>
                    <li><a href="help"><i class="fa fa-question-circle fa-2x"></i></a></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">


