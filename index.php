<?php 
include('./header.php');
include('./constants.php');

?>

    <!--hero's section-->
    <div class="hero" id="home">
        <div class="hero-container">
            <h1 class="hero-heading">Hello, I'm <span>Meshack Malonza</span></h1>
            <p class="hero-description">Software Engineer from Kenya</p>
            <button class="main-button"><a href="<?php echo SITEURL; ?>projects.php">Projects</a></button>
        </div>
    </div>

    <!-- About section -->
<div class="main" id="about">
    <div class="main-container">
        <div class="main-img-container">
            <div class="main-img-card"><img src="./profile1.jpg" alt=""></div>
        </div>
        <div class="main-content">
            <p>I'm a deadlined Software Engineer specializing in building highly performant web applications that solve real world problems and provide users with an awesome experience. I'm currently working on laravel and MVC in PHP.</p>
            <button class="main-button"><a href="<?php echo SITEURL; ?>contact.php">Contact here</a></button>
        </div>
    </div>
</div>



        <!-- services section -->

        <div class="services" id="services">
            <h1>My Skills</h1>
            <div class="services-wrapper">
                <div class="services-card">
                    <h2>Frontend</h2>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
                <div class="services-card">
                    <h2>Backend</h2>
                    <ul>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>Django</li>
                    </ul>
                </div>
               
            </div>
        </div>

<?php
 include('./footer.php');
?>