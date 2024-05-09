<?php
include("boostrap.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Buckey Cricket Club</title>
    <style>
        .about-banner {
            background-image: url('img/ABOUTUSBANNER3.png');
            background-size: contain;
            height: 100%;
            width: 100%;
            position: absolute;
            background-repeat: no-repeat;
        }
        .banner h1 {
            color: #fff;
            text-align: center;
            padding-top: 100px; 
        }
    </style>
</head>

<body>

<div class="about-banner">
</div>

<div class="about-container">
    <h2>WELCOME TO<br>BUCKLEY CC,<br>WALES.</h2>
    <div class="slideshow-container">
        <div class="slide fade">
            <img src="img/SENIORMEN.jpg" style="width:80%">
        </div>
        <div class="slide fade">
            <img src="img/UNDER13S.jpg" style="width:80%">
        </div>
        <div class="slide fade">
            <img src="img/BELLES.jpg" style="width:80%">
        </div>>
        <div class="slide fade">
            <img src="img/BELLES.jpg" style="width:80%">
        </div>
        <div class="slide fade">
            <img src="img/BELLES.jpg" style="width:80%">
        </div>
    </div>
</div>

</body>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); 
}
</script>

<?php
require ('footer.php');
?>
