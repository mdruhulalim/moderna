<?php
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
                        <form action="">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" name="title">
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
?>