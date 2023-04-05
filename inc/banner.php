<?php
include_once('admin/database-connect.php');
// insert banner data
$query="SELECT `ID`, `title`, `description`, `btn_text`, `btn_link`, `photo`, `status` FROM `banners` WHERE status = 1";
$rejult=mysqli_query($conn,$query);
if(mysqli_num_rows($rejult)){
    $datas=mysqli_fetch_all($rejult,true);
}

?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <?php
        foreach($datas as $key => $data){
        ?>
        <div class="carousel-item <?= $key == 0 ? 'active' : ''?>">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><?=$data['title']?></h2>
            <p class="animate__animated animate__fadeInUp"><?=$data['description']?></p>
            <?php
            if($data['btn_text']){
                ?>
                 <a href="<?=$data['btn_link']?>" class="btn-get-started animate__animated animate__fadeInUp"><?=$data['btn_text']?></a>
                <?php
                }
            ?>
            </div>
        </div>
        <?php
        }
        ?>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

        </div>
    </section><!-- End Hero -->