<?php 

    use App\Core\Session; 

    if(Session::get('Loggedin') == false)
    {
        redirect('login');
    }
    else if(Session::get('role') == 'Admin')
    {
        redirect('/');
    }



?>
<?php include ('partials/header.php'); ?>
    <div class="row">
        <div class="col-md-12">
            <h1>My Account</h1>
            <div class="col-md-4">
                <?php if(isset($message)){ echo $message ;} ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">My Membership</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav">
                        <?php if($membershipFields) { foreach($membershipFields as $memberField){ ?>
                            <li>
                                Membership Type: <?= $memberField->membership_type ?>
                            </li>
                            <li>
                                Expiry Date: <?= $memberField->membership_expiry ?>
                            </li>
                            <li>
                                Membership Status: <?= $memberField->membership_validity?>
                            </li>
                        <?php } } else { ?>
                            <li>No Membership Valid</li>
                        <?php } ?>
                        </ul>
                    </div> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Membership Form</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container-fluid">
                            <form action="subscribe" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <select name="sub_type" id="" class="form-control">
                                        <option value="Premium">Premium</option>
                                        <option value="Gold">Gold</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" name="subscribe">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Change Password</h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                    <?php if(isset($pass_message)){ echo $pass_message ;} ?>
                        <form action="changePassword" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="">Current Password</label>
                                <input  type="password" name="current_pass" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">New Password</label>
                                <input type="password" name="new_pass" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="change_password" value="Change Password" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ('partials/footer.php'); ?>