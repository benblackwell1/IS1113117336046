<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
        <!--style for the php page-->
        <style>
          h1{
            text-align: center;
          }
         
          h4{
            text-align: left;
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
              
              <label for="SalesForce">
              <input type="radio" id="salesForce" name="product" onClick="disablebtnProceed()">
                SalesForce @ $100
              </label>
              
              <br>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()">
                AWS @ $300
              </label>
             
              <br>
              
               
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()">
                Gmail Services @ $275
              </label>
              
              <br>
            
              <label for="akamai">
                <input type="radio" id="akamai" name="product" onClick="disablebtnProceed()">
                Akamai @ $175
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
              
              <label class="label" for="total">
                Total
                <input  type="text" id="total" name="total" value="0.00" readonly>
              </label>
    
              
              
              <br>
              
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
              <br>
              <br>
              <button onClick="calcSub()">Calculate Cost</button>
              <a class="button" role="button" href="Ebus1.php">Clear Choice</a>
            
            </form>
            
            <br>
            
            
    
    </body>
</html>