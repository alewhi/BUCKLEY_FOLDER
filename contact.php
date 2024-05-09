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
        .contact-banner {
            background-image: url('img/CONTACTBANNER.png');
            background-size: contain;
            height: 100%;
            width: 100%;
            position: absolute;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
<div class="contact-banner">
</div>

<div class="contact-container">
    <h2>GET<br>IN<br>TOUCH.<br><a href="https://www.facebook.com/groups/902566951168307/" class="fa fa-facebook" target="_blank"></a>
            <a href="https://twitter.com/buckleycc?lang=en" class="fa fa-twitter" target="_blank"></a>
            <a href="https://www.instagram.com/buckleycricketclub/" class="fa fa-instagram" target="_blank"></a></h2>
    <form method="post" action="contactform.php">
    <label for="name">FULLNAME *</label>
    <input type="text" name="name" id="name" required>

    <label for="email">EMAIL *</label>
    <input type="text" name="email" id="email" required>

    <label for="subject">SUBJECT *</label>
    <input type="text" name="subject" id="subject" required>

    <label for="message">MESSAGE *</label>
    <textarea name="message" id="message" required></textarea>

    <br>

    <button>SUBMIT</button>
</form>

</div>

<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

<?php
require ('footer.php');
?>
