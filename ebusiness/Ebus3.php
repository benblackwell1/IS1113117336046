<?php
session_start();
?>
<!DOCTYPE html>
<html>
        <head>
            <title>RECEIPT</title>
            <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
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
    </body>
    <a class="btn btn-success btn-right" href="../homepage.html">Home</a>
</html>