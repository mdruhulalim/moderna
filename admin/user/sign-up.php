<?php
// include header
include_once('../admin-inc/header-ii.php');
?>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
        <!-- start Sign up -->
        <div class="card">
            <div class="card-header">
                <h4>Sign Up</h4>
                <?php
                if(isset($_SESSION['user_insert_success'])){
                    ?>
                    <p class="text-success"><?=$_SESSION['user_insert_success']?></p>
                    <?php
                }
                if(isset($_SESSION['user_already_exist'])){
                    ?>
                    <p class="text-danger"><?=$_SESSION['user_already_exist']?></p>
                    <?php
                }
                ?>
            </div>
            <div class="card-body">
                <form action="<?=siteUrl()?>admin/user/sign-up-action.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input name="username" type="text" class="form-control" id="username" placeholder="Enter username">
                        <?php
                        if(isset($_SESSION['error_username'])){
                            ?>
                            <p class="text-danger"><?=$_SESSION['error_username']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                        <?php
                        if(isset($_SESSION['error_email'])){
                            ?>
                            <p class="text-danger"><?=$_SESSION['error_email']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        <?php
                        if(isset($_SESSION['error_password'])){
                            ?>
                            <p class="text-danger"><?=$_SESSION['error_password']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="confirm-password">Confirm Password</label>
                        <input name="passwordB" type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                        <?php
                        if(isset($_SESSION['error_passwordB'])){
                            ?>
                            <p class="text-danger"><?=$_SESSION['error_passwordB']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="photo">Photo</label>
                        <input name="photo" type="file" class="form-control-file" id="photo">
                        <?php
                        if(isset($_SESSION['error_photo'])){
                            ?>
                            <p class="text-danger"><?=$_SESSION['error_photo']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary  mt-3">Submit</button>
                </form>
            </div>
            <button class="btn btn-success"><a class="btn" href="<?=siteUrl()?>admin/user/sign-in.php">Sign In</a></button>
        </div>
        </div>
    </div>
    </div>
<?php
// include footer
include_once('../admin-inc/footer.php');
// unset showing success massage
unset($_SESSION['user_insert_success']);
// unset showing user exist massage
unset($_SESSION['user_already_exist']);
// unset showing error massage
unset($_SESSION['error_username']);
unset($_SESSION['error_email']);
unset($_SESSION['error_password']);
unset($_SESSION['error_passwordB']);
unset($_SESSION['error_photo']);