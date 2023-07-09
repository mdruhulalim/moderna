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
                        <h2>Insert Services</h2>
                        <a class="btn-primary btn" href="<?=siteUrl()?>admin/services/service.php">All Services</a>
                    </div>
                    <div class="card-body">
                        <form action="<?=siteUrl()?>admin/services/service-action.php" method="post">
                            <div class="form-group">
                            <select class="form-control" name="icon_class" id="">
                                    <option value="bxl-dribbble">Dribbble</option>
                                    <option value="bx-file">File</option>
                                    <option value="bx-tachometer">Tachometer</option>
                                    <option value="bx-world">World</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control" placeholder="Title" name="title"></input>
                                <?php
                                if(isset($_SESSION['service_title_error'])){
                                    ?>
                                    <p class="text-danger"><?=$_SESSION['service_title_error']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" placeholder="Description" name="description"></textarea>
                                <?php
                                if(isset($_SESSION['service_description_error'])){
                                    ?>
                                    <p class="text-danger"><?=$_SESSION['service_description_error']?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-group mt-3">
                                <select class="form-control" name="border_color" id="">
                                        <option value="icon-box-pink">Pink</option>
                                        <option value="icon-box-cyan">Cyan</option>
                                        <option value="icon-box-green">Green</option>
                                        <option value="icon-box-blue">Blue</option>
                                    </select>
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
unset($_SESSION['service_title_error']);
unset($_SESSION['service_description_error']);