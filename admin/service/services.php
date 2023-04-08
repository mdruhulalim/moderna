<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: sign-in.php');
}
include_once('../admin-inc/header.php');
// database connect
include_once('../database-connect.php');
// select query
$query="SELECT * FROM `service`";
$rejult=mysqli_query($conn,$query);
if(mysqli_num_rows($rejult)){
    $datas=mysqli_fetch_all($rejult,true);
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Services</h2>
                        <a class="btn-primary btn" href="<?=siteUrl()?>admin/service/insert-service.php">Insert Services</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
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
                                        <th><?=$data['status'];?></th>
                                        <th>
                                            <!-- update and delete -->
                                            <a class="badge badge-primary d-inline-block" href="update-banner.php?ID=<?=$data['ID'];?>">Update</a>
                                            <a class="badge badge-danger d-inline-block" href="delete-banner.php?ID=<?=$data['ID'];?>" onclick="return confirm('Are you sure?')">Delete</a>
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
</main>
<?php
include_once('../admin-inc/footer.php');
?>