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
        .gallery-banner {
            background-image: url('img/GALLERYBANNER.png');
            background-size: contain;
            height: 100%;
            width: 100%;
            position: absolute;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
<div class="gallery-banner">
</div>

<div class="gallery-content">
    <h2><ion-icon name="images-outline"></ion-icon></h2>
</div>



<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

<?php
require ('footer.php');
?>
