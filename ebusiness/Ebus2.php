<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <!--adding browser icon-->
            <link rel="icon" href="https://d30y9cdsu7xlg0.cloudfront.net/png/28468-200.png" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
         body{
            background-image: url("https://all4desktop.com/data_images/original/4236532-background-images.jpg");
            }
            
             h4{
            text-align: center;
            }
            
            .move{
            margin-left: 10%;
            }
    </style>
    
    </head>
    
    <body>
        <h4>Please enter your payment details:</h4>
        
        
            <form class="move" action="Ebus3.php" method="POST">

                    <label for="user_pin">PIN:</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    <br>
                    <br>
                    
                    <label for="user_email">Email:</label>
                    <input type="text" id="user_email" name="emailaddress" placeholder="Email">
                    
                    <br>
                    <br>
                    
                    <label for="user_name">Full Name:</label>
                    <input type="text" id="user_name" name="fullname" placeholder="Full Name">
                    
 
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button class="move" onClick="validateFullName()">Validate</button>
            
        </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        
    </body>
</html>