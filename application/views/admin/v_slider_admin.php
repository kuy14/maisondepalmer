<!DOCTYPE html>
<html lang="en">
<head>
    <title>Slider Admin</title>
</head>
<body>
    <form action="<?php echo base_url('ConfigAdmin/edit_gambar/1') ?>" method="post">
        <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <input type="submit" value="Edit Slider 1" name="slide1"> 
            </li>
            <li>
                <input type="submit" value="Edit Slider 2" name="slide2">
            </li>
            <li>
                <input type="submit" value="Edit Slider 3" name="slide3">  
            </li>
            <li>
                <input type="submit" value="Edit Slider 4" name="slide4">
            </li>
                <a href="<?php echo base_url('AdminLogin/logout') ?>">
                    Log-Out
                </a>
        </ul>
    </form>
</body>
</html>