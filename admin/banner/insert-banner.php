<?php
// include header
include('../admin-inc/header.php');
// include site menu
include('../admin-inc/site-menu.php');
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="mt-3">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Insert Banners</h2>
                        <a class="btn-primary btn" href="<?=siteUrl()?>admin/banner/banner.php">All Banner</a>
                    </div>
                    <div class="card-body">
                        <form action="<?=siteUrl()?>admin/banner/banner-action.php" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" name="title">
                                <?php
                                if(isset($_SESSION['banner_title_error'])){
                                    ?>
                                    <p class="text-danger"><?=$_SESSION['banner_title_error']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" placeholder="Description" name="description"></textarea>
                                <?php
                                if(isset($_SESSION['banner_description_error'])){
                                    ?>
                                    <p class="text-danger"><?=$_SESSION['banner_description_error']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control" type="text" placeholder="Button text" name="btn_text">
                                <?php
                                if(isset($_SESSION['banner_btn_text_error'])){
                                    ?>
                                    <p class="text-danger"><?=$_SESSION['banner_btn_text_error']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control" type="text" placeholder="Button link" name="btn_link">
                                <?php
                                if(isset($_SESSION['banner_btn_link_error'])){
                                    ?>
                                    <p class="text-danger"><?=$_SESSION['banner_btn_link_error']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
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
// include footer
include('../admin-inc/footer.php');
// unset showing error massage
unset($_SESSION['banner_title_error']);
unset($_SESSION['banner_description_error']);
unset($_SESSION['banner_btn_text_error']);
unset($_SESSION['banner_btn_link_error']);