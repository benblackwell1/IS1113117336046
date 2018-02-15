<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form class="form" method="POST" action="Ebus2.php">
              
              <label for="SalesForce">
              <input type="radio" id="salesForce" name="product" checked onClick="disablebtnProceed()">
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()">
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              
              
              
              <label for="subtotal">
                Sub Total
                <input style="margin-left: 50px;" type="text" id="subtotal" value="0.00" readonly>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input style="margin-left: 50px;" type="text" id="total" name="total" value="0.00" readonly>
              </label>
    
              
              
              <br/>
              
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a class="button" role="button" href="Ebus1.php">Clear Choice</a>
            
    
    </body>
</html>