<?php
include('./constants.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meshgen_portfolio</title>
    <link rel="stylesheet" href="./style.css">
    <script  type="javascript" src="./app.js"></script>
    <script src="https://kit.fontawesome.com/d4b9145691.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <!--navbar section-->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="<?php echo SITEURL; ?>index.php#home" id="navbar-logo">MeshGen</a>
            <div class="navbar-toggle" id="mobile-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="navbar-menu">
                <li class="navbar-item">
                    <a href="<?php echo SITEURL; ?>index.php#home" class="navbar-links" id="home-page">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="<?php echo SITEURL; ?>index.php#about" class="navbar-links" id="about-page">About</a>
                </li>
                <li class="navbar-item">
                    <a href="<?php echo SITEURL; ?>index.php#services" class="navbar-links" id="services-page">Skills</a>
                </li>
                <li class="navbar-btn">
                    <a href="<?php echo SITEURL; ?>contact.php" class="button" id="contact">Contact</a>
                </li>
            </ul>

        </div>
    </nav>