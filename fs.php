<!-- Developed by: Danjuma Jubril Charles
    email: charlesjubril@yahoo.com
            charlesjubril@gmail.com -->
<?php
session_start();
include("connn.php");
if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header("location: index.php");
    exit();
}
$did = $_GET['id'];

    $s = "SELECT * FROM feedback WHERE id = '$did'";
    $re = mysqli_query($link, $s);
    $data = mysqli_fetch_array($re);

    $sde = "SELECT * FROM staff WHERE id = '$_SESSION[id]'";
    $rede = mysqli_query($link, $sde);
    $datade = mysqli_fetch_array($rede);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ITF</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="padding: 20px;">
    <div class="container">
        <div class="alert alert-success sticky-top" role="alert">
            <h4 class="alert-heading">Industrial Trianing Fund</h4>
            <p class="card-text text-monospace">Students Information and Payment System.</p>
            <hr>
            <p class="mb-0"><b><?php echo $data['smatric'];?> feedback body</b>
                <span class="float-right">
                    <a href="" class="badge badge-dark">Reload</a>
                    <a href="landing.php" class="badge badge-primary">Return</a>
                </span>
            </p>
        </div>
        <div class="container" style="width: 40rem;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['smatric'];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['time'];?></h6>
                    <p class="card-text"><?php echo $data['msg'];?></p>
                </div>
            </div>
            <div class="card float-right mb-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['stname'];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['sttime'];?></h6>
                    <p class="card-text"><?php echo $data['response'];?></p>
                </div>
            </div>
        </div>
    
    <div class="shadow-lg fixed-bottom p-2 bg-white text-right">
        <b>&copy Xhibit 2019,</b> Developed by Danjuma Jubril Charles
    </div>
</body>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/mobile-nav/mobile-nav.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="contactform/contactform.js"></script>
<script src="js/main.js"></script>

</html>