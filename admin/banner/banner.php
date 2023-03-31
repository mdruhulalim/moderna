<?php
include_once('../admin-inc/header.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Banners</h2>
                        <a class="btn-primary btn" href="<?=siteUrl()?>admin/banner/insert-banner.php">Insert Banner</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Button text</th>
                                <th>Button link</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
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