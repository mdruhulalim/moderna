<?php
// include header
include('../admin-inc/header.php');
// include site menu
include('../admin-inc/site-menu.php');
// get banner ID
$ID = $_GET['ID'];
// include database
include('../db.php');
// get banner value
$query = "SELECT * FROM `banner` WHERE ID = '$ID'";
$datas = mysqli_query($conn, $query);
if(mysqli_num_rows($datas)>0){
    $datas=mysqli_fetch_assoc($datas);
}
// update banner value
if(isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $description =trim(htmlentities($_POST['description']));
    $btn_text =trim(htmlentities($_POST['btn_text']));
    $btn_link =trim(htmlentities($_POST['btn_link']));
    
    // update query
    $query = "UPDATE `banner` SET `title`='$title',`description`='$description',`btn_text`='$btn_text',`btn_link`='$btn_link' WHERE ID = '$ID'";
    $result = mysqli_query($conn, $query);
    if($result){
        $success = "Succesfully update data";
    }
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Update banner information</h2>
                        <?php
                        if(isset($success)){
                            ?>
                            <p class="text-success"><?=$success?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="card-body">
                    <form method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" name="title" value="<?=$datas['title']?>">
                                <?php
                                if(isset($error['update_banner_title'])){
                                    ?>
                                    <p class="text-danger"><?=$error['update_banner_title']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" placeholder="Description" name="description"><?=$datas['description']?></textarea>
                                <?php
                                if(isset($error['update_banner_description'])){
                                    ?>
                                    <p class="text-danger"><?=$error['update_banner_description']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control" type="text" placeholder="Button text" name="btn_text" value="<?=$datas['btn_text']?>">
                                <?php
                                if(isset($error['update_banner_btn_text'])){
                                    ?>
                                    <p class="text-danger"><?=$error['update_banner_btn_text']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control" type="text" placeholder="Button link" name="btn_link" value="<?=$datas['btn_link']?>">
                                <?php
                                if(isset($error['update_banner_btn_link'])){
                                    ?>
                                    <p class="text-danger"><?=$error['update_banner_btn_link']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control btn btn-success" type="submit"  name="submit" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
// include footer
include('../admin-inc/footer.php');