<?php 
    use App\Core\Session; 
?>
<?php require 'partials/header.php'; ?>
        <?php 
            if(Session::get('Loggedin') == true && Session::get('role') == 'Admin'){
         
            if(isset($message)): 
             echo $message; 
            endif; 
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title"> Mp3 Upload Form </h3>
            </div>
            <div class="panel-body">
                <form action="upload" method="post" enctype="multipart/form-data">
                <label for="">upload your File</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="50097152">
                <input type="file" class="form-control" name="file" id=""> 
                <br>
                <input type="submit" class="btn btn-success" name="upload" value="Upload">
                </form>
            </div>
        </div>
            

            <hr>
        <?php }?>
        <?php if(Session::get('role') == 'Member'):?>
            <div class="jumbotron">
                <h1 class="text-center">Welcome to  where Malawi's finest Music Lives</h1> 
                <p class="text-center">Please feel free to stream any song you would like to listen to.</p> 
            </div>
        <?php endif; ?>
        <h2>Music List</h2>
        <table class="table table-striped">
           <?php 
            foreach($musicFiles as $file){ 
            ?>
                <tr>
                    <td><img src="img/iHeadphone.png" alt="">  <a href="overview?songId=<?= $file->id; ?>"><?=  $file->file_name; ?></a></td>
                </tr>
            <?php 
                }
            ?>
        </table>
        <?php if(!Session::get('role') == 'Admin'): ?>
        <div class="row">
            <hr>
            <h2>Membership Subscriptions</h2>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading pricing">
                        <h2 class="panel-title text-center">Free</h2>
                        </div>
                        <div class="panel-body">
                            <div class="pricing_features">
                                <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-times text-danger"></i> 1 years access <strong> to all locations</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> stream</li>
                                    <li><i class="fa fa-times text-danger"></i> Limited <strong> download quota</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Cash on Delivery</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> All time <strong> updates</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading pricing">
                            <h3 class="panel-title text-center">Premium</h3>
                        </div>
                        <div class="panel-body">
                            <div class="pricing_features">
                                <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-check text-success"></i> 6 months access <strong> to all locations</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> stream</li>
                                    <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                    <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading pricing">
                        <h3 class="panel-title text-center">Gold</h3>
                        </div>
                        <div class="panel-body">
                            <div class="pricing_features">
                                <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-check text-success"></i> 1 years access <strong> to all locations</strong></li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> stream</li>
                                    <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                    <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> access to all files</li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <?php endif; ?>
<?php require 'partials/footer.php'; ?>