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
            
            .move2{
                margin-left: 50%;
            }
           
             /**************************************************************************************************************/
          /* code obtained form stackoverflow (https://stackoverflow.com/questions/13204002/align-form-elements-in-css) */
          /**************************************************************************************************************/
          form {
            width: 80%;
            margin: 0 auto;
          }

          .label, input[type=text] {
            /* in order to define widths */
            display: inline-block;
          }

          .label {
            width: 7%;
            /* positions the label text beside the input */
            text-align: left;
          }

          .label + input[type=text] {
            width: 25%;
            /* large margin-right to force the next element to the new-line
            and margin-left to create a gutter between the label and input */
            margin: 0 30% 0 4%;
          }
          .label + input[type=password] {
            width: 10%;
            /* large margin-right to force the next element to the new-line
            and margin-left to create a gutter between the label and input */
            margin: 0 30% 0 4%;
          }

            /* only the submit button is matched by this selector,
            but to be sure you could use an id or class for that button */
          
          input[type=text] + input[type=text] {
            float: right;
          }
    </style>
    
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