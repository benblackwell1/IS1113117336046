<?php
session_start();
 $_SESSION["email"] = $_POST["email"]
?>
<?php
$_SESSION["fullname"] = $_POST["fullname"]
?>
<!DOCTYPE html>
<html>
        <head>
            <title>RECEIPT</title>
            <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
            <!--adding browser icon-->
            <link rel="icon" href="https://d30y9cdsu7xlg0.cloudfront.net/png/28468-200.png" />
            
                <style>
                        body{
                        background-image: url("https://all4desktop.com/data_images/original/4236532-background-images.jpg");
                        
                        text-align: center;
                        }
                        
                </style>
        </head>
    
    
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        //Echo session variables that were set on the previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        <br>
        <?php
        echo "Your Email is " . $_SESSION["email"] . "."
        ?>
        <br>
        <?php
        echo "Your Name is " . $_SESSION["fullname"]
        ?>
       
        <br>
        <p><em>Thank you for shopping with us!</em></p>
    </body>
    <a class="btn btn-success btn-right" href="../homepage.html">Home</a>
</html>