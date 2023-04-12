<?php
// include header
include('../admin-inc/header.php');
// include site menu
include('../admin-inc/site-menu.php');
// include database
include('../db.php');
// select query
$query="SELECT `ID`, `title`, `description`, `btn_text`, `btn_link`, `status` FROM `banner`";
$rejult=mysqli_query($conn,$query);
if(mysqli_num_rows($rejult)){
    $datas=mysqli_fetch_all($rejult,true);
}
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Banners</h2>
                        <a class="btn-primary btn" href="<?=siteUrl()?>admin/banner/insert-banner.php">Insert Banner</a>
                        <?php
                        if(isset($_SESSION['banner_insrt_success'])){
                            ?>
                            <p class="text-success mt-3"><?=$_SESSION['banner_insrt_success']?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Button text</th>
                                <th>Button link</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            // showing data
                                foreach($datas as $key => $data){
                                    ?>
                                    <tr>
                                        <th><?=++$key?></th>
                                        <th><?=$data['title'];?></th>
                                        <th><?=substr($data['description'], 0, 20). '...'?></th>
                                        <th><?=$data['btn_text'];?></th>
                                        <th><?=$data['btn_link'];?></th>
                                        <th><?=$data['status'];?></th>
                                        <th>
                                            <!-- update and delete -->
                                            <a class="btn btn-outline-primary" href="update-banner.php?ID=<?=$data['ID'];?>">Update</a>
                                            <a class="btn btn-outline-danger" href="delete-banner.php?ID=<?=$data['ID'];?>" onclick="return confirm('Are you sure?')">Delete</a>
                                        </th>
                                    </tr>
                                    <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<?php
// include footer
include('../admin-inc/footer.php');
// unset success massage
unset($_SESSION['banner_insrt_success']);