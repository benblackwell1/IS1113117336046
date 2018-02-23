/* global $ */
 
 function calcSub(){
     
     var argSubTotal;
     
     if(document.getElementById('salesForce').checked){
        argSubTotal = 100;
     }
     else if (document.getElementById('gmail').checked){
         argSubTotal = 275;
     }
     else if (document.getElementById('akamai').checked){
         argSubTotal
     }
     else{
         argSubTotal = 300;
    }
     
     display(argSubTotal);
    }
 
 function display(parm1){
     
     document.getElementById("subtotal").value = parm1;
     document.getElementById("total").value = parm1;
      
      enablebtnProceed();
 }
 
 function enablebtnProceed(){
     $('#btnProceed').prop('disabled', false);
 }
 
 function disablebtnProceed(){
     $('#btnProceed').prop('disabled', true);
 } 