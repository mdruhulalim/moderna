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
                        <h2>Insert Service</h2>
                        <a class="btn-primary btn" href="<?=siteUrl()?>admin/service/services.php">All Services</a>
                    </div>
                    <div class="card-body">
                        <form action="<?=siteUrl()?>admin/service/service-action.php" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" name="title">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="border_color" id="">
                                    <option value="icon-box-pink">Pink</option>
                                    <option value="icon-box-cyan">Cyan</option>
                                    <option value="icon-box-green">Green</option>
                                    <option value="icon-box-blue">Blue</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Icon class" name="icon_class">
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