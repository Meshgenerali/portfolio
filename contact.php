
<?php
 include('./header.php');
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

            <!-- contact section -->
            <div class="main" id="contact">
                <div class="main-container">
                    
                    <form action="formSubmit.php" method="post">


                    <!--// <?php 
                       // if(isset($_SESSION['sent'])){
                        //    echo $_SESSION['sent'];
                           // unset($_SESSION['sent']);
                        //} 
                        
                       // if(isset($_SESSION['fail'])){
                       //     echo $_SESSION['fail'];
                       //     unset($_SESSION['fail']);
                       // }
                        ?> -->

                        <fieldset>
                        <h1>Send a message or Leave a comment</h1>
                        <legend>Message or Comment</legend>
                        <div class="order-label">Full Name</div>
                        <input type="text" name="full-name" placeholder="E.g. kipchumba Koreel" class="input-responsive" required>
    
                        <div class="order-label">Email</div>
                        <input type="email" name="email" placeholder="E.g. kip2023@gmail.com" class="input-responsive" required>
    
                        <div class="order-label">Message</div>
                        <textarea name="message" rows="10" placeholder="Leave your Message or comment here" class="input-responsive" required></textarea>
    
                        <input class="btn" type="submit" name="submit" value="Submit" class="btn btn-primary">
                        
                    </fieldset>
                    </form>
                   
                </div>

<?php
include('./footer.php');
?>
</div>

</body>
</html>

