<?php 

    use App\Core\Session; 

    if(Session::get('Loggedin') == true){
        redirect('profile');
    }



?>
<?php require 'partials/header.php'; ?>
    <div class="row"> 
        <div class="col-md-4 col-md-offset-4">
            <?php if(isset($message)): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                    &times;
                    </button>
                    <?= $message; ?>
                </div>
            <?php endif; ?>
            <h2 class="text-center">Login Form</h2>
            <h4 class="text-center">Enter your credintials below</h4>
            <hr>
            <div class="login-form">
                <form action="login" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="text" class="form-control" name="email" id="" required>
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
<?php require 'partials/footer.php'; ?>