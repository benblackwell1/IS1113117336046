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
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
       
       <style>
           body{
               background-image: url("https://all4desktop.com/data_images/original/4236532-background-images.jpg");
           }
       </style> 
    
    
    </head>
    
    <body>
        <h4 class="mainheading">Please enter your payment details:</h4>
        
        
            <form action="Ebus3.php" method="POST">
                    
                    <label class="label-name" for="user_name">Full Name:</label>
                    <input class="input-name" type="text" id="user_name" name="fullname" placeholder="Full Name">
                    
                    <br>
                    <br>
                    
                    <label class="label-email" for="user_email">Email:</label>
                    <input class="input-email" type="text" id="user_email" name="emailaddress" placeholder="Email">
                    
                    <br>
                    <br>
                    
                    <label class="label-pin" for="user_pin">PIN:</label>
                    <input class="input-pin" type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
         
         
                    <button class="btn-purchase btn btn-success" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                    
                    
            </form>
            
            <br>
            
           <button class="btn-validate btn btn-yellow" onclick="validatePIN()">validate</button>
            
        
        
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        
    </body>
</html>