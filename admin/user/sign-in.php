<?php
// include header
include_once('../admin-inc/header-ii.php');
?>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
        <!-- start Sign in -->
        <div class="card">
            <div class="card-header">
                <h4>Sign In</h4>
            </div>
            <div class="card-body">
                <form action="<?=siteUrl()?>admin/user/sign-in-action.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        <?php
                        if(isset($_SESSION['error_username'])){
                            ?>
                            <p class="text-danger"><?=$_SESSION['error_username']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        <?php
                        if(isset($_SESSION['error_password'])){
                            ?>
                            <p class="text-danger"><?=$_SESSION['error_password']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-block mt-3">Sign In</button>
                </form>
            </div>
            <button class="btn btn-success"><a class="btn" href="<?=siteUrl()?>admin/user/sign-up.php">Sign Up</a></button>
        </div>
        </div>
    </div>
    </div>
<?php
// include footer
include_once('../admin-inc/footer.php');
// unset showing error massage
unset($_SESSION['error_username']);
unset($_SESSION['error_password']);