<?php
include("boostrap.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCATION</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .location-banner {
            background-image: url('img/LOCATIONBANNER.png');
            background-size: contain;
            height: 100%;
            width: 100%;
            position: absolute;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
<div class="location-banner">
</div>

<div class="location-header">
    <h2>LOCATION<ion-icon name="location-outline"></ion-icon></h2>
    <p>
    THE CLUB HOUSE<br>
    Lane End<br>
    Chester Road<br>
    Buckley, Flintshire<br>
    Wales<br>
    CH7 3AQ<br>
    Telephone: <a href="tel:+447894483833">07894483833</a> <br></p>
    <a class="google-maps-button" target="_blank" style="background: white" href="https://maps.app.goo.gl/YNpMFnryndU2aZrNA">OPEN IN GOOGLE MAPS</a>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d597.9680707502491!2d-3.06575304624158!3d53.16633085407558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ac55ae4c0f3e3%3A0xbf9002332d4f2a79!2sBuckley%20Cricket%20Club!5e0!3m2!1sen!2suk!4v1714382265518!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

<?php
require ('footer.php');
?>
