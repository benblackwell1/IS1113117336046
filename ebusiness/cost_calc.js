/* global $ */
 
 var vat = .10 // global variable
 var discount = .05 //global variable
 
 function calcSub(){
     
     var argSubTotal;
    
     
     if(document.getElementById('salesForce').checked){
        argSubTotal = 100;
     }
     else if (document.getElementById('gmail').checked){
         argSubTotal = 275;
     }
     else if (document.getElementById('cloud9').checked){
         argSubTotal= 175;
     }
     else if (document.getElementById('aws').checked){
          argSubTotal = 300;
     }
     else{
        alert("Please select a product!")
    }
    
     calcDisVatTotal(argSubTotal)
 
 }
 
 
 function calcDisVatTotal(parmSubTotal){
    
    var vatAmt;
    var discountAmt;
    var subTotal;
    var totalPrice;
    
    vatAmt = (parmSubTotal * vat).toFixed(2) 
    
    discountAmt = ((parmSubTotal + vatAmt) * discount).toFixed(2)
    
    subTotal = parmSubTotal.toFixed(2)
    
    totalPrice = ((subTotal + vatAmt) - discountAmt).toFixed(2)
   
  display(vatAmt, discountAmt, subTotal, totalPrice);
 }
 /* code for rounding number to 2 decimal places obtained from stackoverflow
 (https://stackoverflow.com/questions/25224129/round-every-textbox-to-2-decimal-places) */
 
    
 function display(parm1, parm2, parm3, parm4){
     
     document.getElementById("vat").value = parm1;
     document.getElementById("discount").value = parm2;
     document.getElementById("subtotal").value = parm3;
     document.getElementById("total").value = parm4;
      
      enablebtnProceed();
 }
 

 function enablebtnProceed(){
     $('#btnProceed').prop('disabled', false);
 }
 
 function disablebtnProceed(){
     $('#btnProceed').prop('disabled', true);
 } 