<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <!--adding browser icon-->
            <link rel="icon" href="https://d30y9cdsu7xlg0.cloudfront.net/png/28468-200.png" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
        <!--style for ebus1 page-->
        <style>
          h1{
            text-align: center;
          }
         
          h4{
            text-align: left;
            margin-left: 10%;
          }
          
          .move{
            margin-left: 10%;
           
          }
          
          body{
            background-image: url("https://all4desktop.com/data_images/original/4236532-background-images.jpg");
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
            width: 30%;
            /* positions the label text beside the input */
            text-align: right;
          }

          .label + input[type=text] {
            width: 30%;
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
        
            <h1>Cloud Shop</h1>
            
            <h4>Select a Product</h4>
            
            
            <form class="form" method="POST" action="Ebus2.php">
              
              <label for="salesForce">
              <input type="radio" id="salesForce" name="product" onClick="disablebtnProceed()">
                SalesForce @  &#8364; 100
              </label>
              
              <br>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()">
                AWS @  &#8364; 300
              </label>
             
              <br>
              
               
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()">
                Gmail Services @ &#8364; 400
              </label>
              
              <br>
            
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()">
                Cloud 9 @ &#8364; 200
              </label>
            
              <br>
              
              <br>
              <br>
              
              
              
              <label class="label" for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly>
              </label>
              
              <br>
              
              <label class="label" for="vat">
                VAT @ 10%
                <input  type="text" id="vat" value="0.00" readonly>
              </label>
              
              <br>
              
              <label class="label" for="discount">
                Discount @ 5% 
                <input  type="text" id="discount" value="0.00" readonly>
              </label>
              
              <br>
              
              <label class="label" for="total">
                Total
                <input  type="text" id="total" name="total" value="0.00" readonly>
              </label>
    
              
              
              <br>
              <br>
              
              
              <button class="btn btn-success" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
              <br>
              <br>
              
              
            
            </form>
            
            
            <br>
            
            <!--calling the function-->
            <button class="move btn btn-yellow" onClick="calcSub()">Calculate Cost</button>
            <a class="btn btn-red" role="button" href="Ebus1.php">Clear Choice</a>
            
            <label>*Discount is calculated as a percentage of Sub Total + VAT*</label>
            
            <!--Product images-->
            <img class="salesforce-IMG" src="http://www.stickpng.com/assets/images/58482f67cef1014c0b5e4a81.png" alt="Product Image">
            <img class="AWS-IMG" src="https://community.embarcadero.com/uploads/2214/AWS/b2ap3_thumbnail_AmazonWebservices_Logo.svg-1.png" alt="Product Image">
            <img class="gmail-IMG" src="http://maciek.lasyk.info/sysop/wp-content/uploads/2013/12/Gmail_logo.png" alt="Product Image">
            <img class="cloud9-IMG" src="http://glmdev.tech/open-source/assets/images/carousel/cloud9-logo.png" alt="Product Image">
            
            
    </body>
</html>