<?php
// include header
include('../admin-inc/header.php');
// include site menu
include('../admin-inc/site-menu.php');
// include database
include('../db.php');;
// select query
$query="SELECT `ID`, `play_btn`, `video_link`, `icon`, `title`, `description`, `icon_1`, `title_1`, `description_1`, `status` FROM `why_us`";
$rejult=mysqli_query($conn,$query);
if(mysqli_num_rows($rejult)){
    $datas=mysqli_fetch_all($rejult,true);
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Why us</h2>
                    </div>
                    <div class="card-body">
                    <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Play</th>
                                <th>Video link</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Icon 2</th>
                                <th>Title 2</th>
                                <th>Description 2</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            // showing data
                                foreach($datas as $key => $data){
                                    ?>
                                    <tr>
                                        <th><?=++$key?></th>
                                        <th><?=$data['play_btn'];?></th>
                                        <th><?=$data['video_link'];?></th>
                                        <th><?=$data['icon'];?></th>
                                        <th><?=$data['title'];?></th>
                                        <th><?=substr($data['description'], 0, 20). '...'?></th>
                                        <th><?=$data['icon_1'];?></th>
                                        <th><?=$data['title_1'];?></th>
                                        <th><?=substr($data['description_1'], 0, 20). '...'?></th>
                                        <th><?=$data['status'];?></th>
                                        <th>
                                            <!-- update and delete -->
                                            <a class="btn btn-outline-success" href="why-us-update.php?ID=<?=$data['ID'];?>">Edite</a>
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