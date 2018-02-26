/* global $ */
 
 var vat = .10 // global variable
 var discount = .05 //global variable
 
 function calcSub(){
     
     var argSubTotal;
     var error;
     
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
         error = 0.00;
    }
     
     display(argSubTotal, vat, discount);
     
    }
    
    
 function display(parm1, parm2, parm3){
     
     document.getElementById("subtotal").value = parm1.toFixed(2);
     document.getElementById("vat").value = (parm1 * parm2).toFixed(2);
     document.getElementById("discount").value = ((parm1 + (parm1 * parm2)) * parm3).toFixed(2);
     document.getElementById("total").value = (parm1 + (parm1 * parm2)) - ((parm1 + (parm1 * parm2)) * parm3).toFixed(2);
      /* code for rounding number to 2 decimal places obtained from stackoverflow
      (https://stackoverflow.com/questions/25224129/round-every-textbox-to-2-decimal-places) */
      
      enablebtnProceed();
 }
 

 function enablebtnProceed(){
     $('#btnProceed').prop('disabled', false);
 }
 
 function disablebtnProceed(){
     $('#btnProceed').prop('disabled', true);
 } 