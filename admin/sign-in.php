<?php
include_once('admin-inc/header-ii.php');
// include header
// form validation
$empty = [];
if(isset($_POST['submit'])){
    $username = trim(htmlentities($_POST['username']));
    $password = $_POST['password'];
    $enctype = md5($password);

    if(empty($username)){
        $empty['emptyUsername'] = 'Inter your user name';
    }
    if(empty($password)){
        $empty['emptyPassword'] = 'Inter your password';
    }

    // check valid user for login
    if(empty($empty)){
        require_once('database-connect.php');
        $query = "SELECT * FROM `admin_user` WHERE username = '$username' AND password = '$enctype'";
        $rejult = mysqli_query($conn, $query);
        if(mysqli_num_rows($rejult)>0){
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.php');
        }else{
            $errorSingin = "Please provide right username and password";
        }
    }
}
?>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
        <!-- start Sign in -->
        <div class="card">
            <div class="card-header">
                <h4>Sign In</h4>
                <?php
                if(isset($errorSingin)){
                    echo $errorSingin;
                }
                ?>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        <?php
                        if(isset($empty['emptyUsername'])){
                            ?>
                            <p class="text-danger"><?=$empty['emptyUsername']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        <?php
                        if(isset($empty['emptyPassword'])){
                            ?>
                            <p class="text-danger"><?=$empty['emptyPassword']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
            </div>
            <button class="btn btn-success"><a class="btn" href="<?=siteUrl()?>admin/sign-up.php">Sign Up</a></button>
        </div>
        </div>
    </div>
    </div>

<?php
include_once('admin-inc/footer.php');