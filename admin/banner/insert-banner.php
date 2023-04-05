<?php
// session_start();
include_once('../admin-inc/header.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Insert Banners</h2>
                        <a class="btn-primary btn" href="<?=siteUrl()?>admin/banner/banner.php">All Banner</a>
                    </div>
                    <div class="card-body">
                        <form action="<?=siteUrl()?>admin/banner/banner-action.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" name="title">
                                <?php
                                // print error massage for title
                                if(isset($_SESSION['banner_title_error'])){
                                    ?>
                                    <p class="text-danger"><?=$_SESSION['banner_title_error']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Button text" name="btn_text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Button link" name="btn_link">
                            </div>
                            <div class="form-group">
                                <input class="" type="file"  name="photo">
                                <?php
                                // print error massage for photo
                                if(isset($_SESSION['banner_photo_error'])){
                                    ?>
                                    <p class="text-danger"><?=$_SESSION['banner_photo_error']?></p>
                                    <?php
                                }
                                ?>
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