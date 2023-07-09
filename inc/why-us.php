<?php
// include database
include('admin/db.php');
// select query
$query="SELECT `ID`, `play_btn`, `video_link`, `icon`, `title`, `description`, `icon_1`, `title_1`, `description_1`, `status` FROM `why_us`";
$rejult=mysqli_query($conn,$query);
if(mysqli_num_rows($rejult)){
    $datas=mysqli_fetch_all($rejult,true);
    $datas = $datas[0];
}
?>
<!-- ======= Why Us Section ======= -->
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="<?=$datas['video_link']?>" class="venobox <?=$datas['play_btn']?> mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx <?=$datas['icon']?>"></i></div>
              <h4 class="title"><a href=""><?=$datas['title']?></a></h4>
              <p class="description"><?=$datas['description']?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx <?=$datas['icon_1']?>"></i></div>
              <h4 class="title"><a href=""><?=$datas['title_1']?></a></h4>
              <p class="description"><?=$datas['description_1']?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->