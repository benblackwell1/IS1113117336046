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
        
    
    
    </head>
    
    <body>
        <h4>Please enter your payment details:</h4>
        
        
            <form class="move" action="Ebus3.php" method="POST">
                    
                    <label class="label" for="user_name">Full Name:</label>
                    <input type="text" id="user_name" name="fullname" placeholder="Full Name">
                    
                    <br>
                    <br>
                    
                    <label class="label" for="user_email">Email:</label>
                    <input type="text" id="user_email" name="emailaddress" placeholder="Email">
                    
                    <br>
                    <br>
                    
                    <label class="label" for="user_pin">PIN:</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
         
         
                    <button class="move2" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                    
                    
            </form>
            
            <br>
            
           <button onclick="validatePIN()">validate</button>
            
        
        
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        
    </body>
</html>