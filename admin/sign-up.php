<?php
include_once('admin-inc/header-ii.php');
// form validation
$empty = [];
if(isset($_POST['submit'])){
    $username = trim(htmlentities($_POST['username']));
    $email = trim(htmlentities($_POST['email']));
    $password = $_POST['password'];
    $passwordB = $_POST['passwordB'];
    $enctype = md5($password);

    if(empty($username)){
        $empty['emptyUsername'] = 'Please inter your name';
    }
    if(empty($email)){
        $empty['emptyEmail'] = 'Please inter your valid email';
    }
    if(empty($password)){
        $empty['emptyPassword'] = 'Please type a strong password';
    }
    if($password != $passwordB){
        $empty['emptyPasswordB'] = "Don't match your password";
    }

    // insert data
    if(empty($empty)){
        require_once('database-connect.php');

        $query = "INSERT INTO `admin_user`(`username`, `email`, `password`) VALUES ('$username','$email','$enctype')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Error: " . mysqli_error($conn));
        } else {
            $success = "Sing up successfully done";
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
                <h4>Sign Up</h4>
                <?php
                if(isset($success)){
                    print_r($success);
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
                        <label for="username">Email</label>
                        <input type="email" class="form-control" id="username" name="email" placeholder="Enter your email">
                        <?php
                        if(isset($empty['emptyEmail'])){
                            ?>
                            <p class="text-danger"><?=$empty['emptyEmail']?></p>
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
                    <div class="form-group">
                        <label for="password">Retype Password</label>
                        <input type="password" class="form-control" id="password" name="passwordB" placeholder="Enter your password again">
                        <?php
                        if(isset($empty['emptyPasswordB'])){
                            ?>
                            <p class="text-danger"><?=$empty['emptyPasswordB']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
            </div>
            <button class="btn btn-success"><a class="btn" href="<?=siteUrl()?>admin/sign-in.php">Sign in</a></button>
        </div>
        </div>
    </div>
    </div>

<?php
include_once('admin-inc/footer.php');