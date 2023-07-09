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
$query = "SELECT * FROM `why_us` WHERE ID = '$ID'";
$datas = mysqli_query($conn, $query);
if(mysqli_num_rows($datas)>0){
    $datas=mysqli_fetch_assoc($datas);
}
// update banner value
if(isset($_POST['submit'])){
    $play_btn = trim(htmlentities($_POST['play']));
    $video_link = trim(htmlentities($_POST['video_link']));
    $icon = trim(htmlentities($_POST['icon']));
    $title = trim(htmlentities($_POST['title']));
    $description =trim(htmlentities($_POST['description']));
    $icon_1 = trim(htmlentities($_POST['icon_1']));
    $title_1 = trim(htmlentities($_POST['title_1']));
    $description_1 =trim(htmlentities($_POST['description_1']));
    
    // update query
    $query = "UPDATE `why_us` SET `play_btn`='$play_btn',`video_link`='$video_link',`icon`='$icon',`title`='$title',`description`='$description',`icon_1`='$icon_1',`title_1`='$title_1',`description_1`='$description_1' WHERE ID = '$ID'";
    $result = mysqli_query($conn, $query);
    if($result){
        $success = "Succesfully update data";
    }
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="mt-3">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Update why us information</h2>
                        <a class="btn-primary btn" href="<?=siteUrl()?>admin/why-us/why-us.php">Why us</a>
                        <?php
                        // show update massage
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
                                <label for="play">Play</label>
                                <input class="form-control" type="text" name="play" value="<?=$datas['play_btn']?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="video_link">Video link</label>
                                <textarea class="form-control" name="video_link"><?=$datas['video_link']?></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="icon">Icon</label>
                                <input class="form-control" type="text" name="icon" value="<?=$datas['icon']?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="<?=$datas['title']?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="title">Title</label>
                                <label for="description">Description</label>
                                <input class="form-control" type="text" name="description" value="<?=$datas['description']?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="icon_1">Icon 2</label>
                                <input class="form-control" type="text" name="icon_1" value="<?=$datas['icon_1']?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="title_1">Title 2</label>
                                <input class="form-control" type="text" name="title_1" value="<?=$datas['title_1']?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="description_1">Description 2</label>
                                <input class="form-control" type="text" name="description_1" value="<?=$datas['description_1']?>">
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