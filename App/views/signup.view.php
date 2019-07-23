<?php 

    use App\Core\Session; 

    if(Session::get('Loggedin') == true){
        redirect('profile');
    }



?>
<?php include ('partials/header.php'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <?php if(isset($message)) : 
                echo $message; 
            endif; ?>
            <h2 class="text-center">Signup Form</h2>
            <h4 class="text-center">Enter your credintials below</h4>
            <hr>
            <div class="login-form">
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="email" class="form-control" name="email" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" class="form-control" name="password" id="" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="submit" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include ('partials/footer.php'); ?>