<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit 1</title>
</head>
<body>
<h2>Edit Event 1</h2>
            <form action="<?php echo base_url('ConfigAdmin/update_gambar') ?>" method="post" enctype="multipart/form-data">
        <?php foreach ($slider as $h) { ?>
        <input type="hidden" name="id" value="<?php echo $h->id_slider; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"style="margin-top:50px;">

                    <h3 style="text-align: center;">Edit EVENT</h3><br>
                </div>
            </div>
        </div>
        <div class="h-100 row align-items-center">
            <div class="col-lg-12">
                <div class="row justify-content-center dashboard-event">
                    <div class="col-8 col-lg-3 dash-event-left">
                        <div class="row justify-content-lg-center h-100">
                            <div class="col-xs-12 col-lg-12 align-self-center">
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>Current image event</strong> should be shown below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <img src="<?php echo base_url("assets/img/" . $h->gambar4) ?>" alt="" width="100%">
                            </div>

                        </div>
                    </div>
                    <div class="col-8 col-lg-3 dash-event-right">
                        <div class="row">
                            <div class="col-lg-12">
                                <h6>Edit Event 4</h6>
                                <div class="form-label-group"><input value="<?php echo $h->title4 ?>" type="text" name="title4" class="form-control" placeholder="title4" required autofocus><label for="title4">Change Title Event</label></div>
                                <label for="file-upload" style="font-size:0.8em;">Upload Slider 4 Image</label>
                                <input type="file" name="gbr4" id="input-file-now" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-max-file-size="10M" data-height="60">
                                <p style="color:rgb(134, 135, 132);font-size: 0.8em;">*Only accept *.jpg | *.jpeg | *.png file format</p>
                                <div class="alert alert-warning" role="alert" style="font-size: 0.8em;">
                                    We Recommend minimum <strong>2560x1080</strong> or more of picture resolution for fit to any devices display
                                </div>
                                <input type="hidden" name="gambars4" value="<?php echo $h->gambar4; ?>">
                                <input type="submit" name="save4" value="Save Event 4" class="btn btn-success">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </form>
</body>
</html>