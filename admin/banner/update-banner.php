<?php
$ID = $_GET['ID'];
// database connect
include_once('../database-connect.php');
// get recent value
// include database
include_once('../database-connect.php');
// select query
$query="SELECT `ID`, `title`, `description`, `btn_text`, `btn_link`, `photo`, `status` FROM `banners` WHERE ID = $ID";
$rejult=mysqli_query($conn,$query);
if(mysqli_num_rows($rejult)){
    $datas=mysqli_fetch_assoc($rejult);
}

// form action
if(isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_link= trim(htmlentities($_POST['btn_link']));
    $photo = $_FILES['photo'];
    $photo_name = $photo['name'];

    // Generate a unique name for the file to avoid filename collisions
    $photoName = uniqid() . "_" . $photo['name'];
    // Move the uploaded file to the banner-image folder
    move_uploaded_file($file['tmp_name'], 'admin/banner/banner-image/' . $photoName);

    // update query
    $query = "UPDATE `banners` SET `title`='$title',`description`='$description',`btn_text`='$btn_text',`btn_link`='$btn_link',`photo`='$photoName' WHERE ID = $ID";
    $rejult = mysqli_query($conn, $query);
    if($rejult){
        header('Location: banner.php');
    }
}
// include header
include_once('../admin-inc/header.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Banners</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" value="<?=$datas['title']?>" name="title">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description" name="description"><?=$datas['description'];?></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Button text" value="<?=$datas['btn_text']?>"  name="btn_text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Button link" value="<?=$datas['btn_link']?>"  name="btn_link">
                            </div>
                            <div class="form-group">
                                <input class="" type="file" value="<?=$datas['photo']?>"   name="photo">
                            </div>
                            <div class="form-group">
                                <input class="form-control btn btn-success" type="submit"  name="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include_once('../admin-inc/footer.php');
session_unset();
?>