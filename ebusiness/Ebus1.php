<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--adding bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
 
        
        <!--jQuery-->
        <script src="https://ajax-googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus1.php">
        
        <label for="SalesForce">
            <input type="radio" id="salesForce" name="product" checked onClick="disablebtnProceed">
            SalesForce @ $100
        </label>
        
        <br/>
        
        <label for="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed">
            AWS @ $300
        </label>
        
        <br/>
        <br/>
        
        <label for="subtotal">
            Sub Total
            <input type="text" id="subtotal" value="0.00" readonly>
        </label>
        
        <br/>
        
        <label for="total">
            Sub Total
            <input type="text" id="total" value="0.00" readonly>
        </label>
        
        <br/>
        
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choices</a>
    </body>
            
</html>